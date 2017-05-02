<template>
    <div>
        <div id="map"></div>
    </div>
</template>

<script>
    export default {
        props: ['address'],
        data(){
            return {
                map: null,
                markerA: null,
                markerB: null
            }
        },
        created(){
            Event.$on('MapsApiLoaded', () => {
                this.createMap();
            });
            Event.$on('calculateRoute', (foreignAddress) => {
                let directionsService = new google.maps.DirectionsService();
                let directionsDisplay = new google.maps.DirectionsRenderer({
                    map: this.map
                });

                this.showRoute(directionsService, directionsDisplay, foreignAddress);
            });
        },
        methods: {
            createMap(){
                var image = {
                    url: "/images/marker.png",
                    size: new google.maps.Size(40, 60),
                };
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({ address: this.address }, (results, status) => {
                    if(status === google.maps.GeocoderStatus.OK){
                        this.map = new google.maps.Map(document.querySelector('#map'), {
                            zoom: 14,
                            center: results[0].geometry.location
                        });
                    }
                    this.markerA = new google.maps.Marker({
                        icon:image,
                        map: this.map,
                        position: results[0].geometry.location
                    });
                });
            },
            showRoute(directionsService, directionsDisplay, foreignAddress){

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode({ address: foreignAddress }, (results, status) => {
                    this.markerB = new google.maps.Marker({
                        map: this.map,
                        position: results[0].geometry.location
                    });

                    directionsService.route({
                        origin: this.markerB.getPosition(),
                        destination: this.markerA.getPosition(),
                        avoidTolls: true,
                        avoidHighways: false,
                        travelMode: google.maps.TravelMode.DRIVING
                    }, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                        } else {
                            window.alert('Directions request failed due to ' + status);
                        }
                    });
                });
            }
        }
    }
</script>

<style>
    #map{
        width:100%;
        height:700px;
    }

    @media(max-width:768px){
        #map{
            height:250px;
        }
    }
</style>
