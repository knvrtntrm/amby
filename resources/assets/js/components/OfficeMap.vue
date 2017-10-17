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
                markerB: null,
                markers: [],
                foreignAddress: null
            }
        },
        created(){
            Event.$on('MapsApiLoaded', () => {
                this.createMap();
            });
            Event.$on('calculateRoute', (foreignAddress) => {
                this.map = new google.maps.Map(document.querySelector('#map'), {
                    zoom: 14,
                    scrollwheel:  false
                });

                this.showRoute(foreignAddress);
            });
            Event.$on('openInMaps', (foreignAddress) => {
                window.open("https://www.google.com/maps/dir/" + foreignAddress + "/" + this.address, '_blank');
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
                            center: results[0].geometry.location,
                            scrollwheel:  false
                        });
                    }
                    this.markerA = new google.maps.Marker({
                        icon:image,
                        map: this.map,
                        position: results[0].geometry.location
                    });
                });
            },
            showRoute(foreignAddress){

                let directionsService = new google.maps.DirectionsService();
                let directionsDisplay = new google.maps.DirectionsRenderer({
                    map: this.map
                });

                var geocoder = new google.maps.Geocoder();

                if(this.markers.length > 0){
                    for (var i = 0; i < this.markers.length; i++) {
                        this.markers[i].setMap(null);
                        console.log(this.markers);
                    }
                    this.markers = [];
                }

                var image = {
                    url: "/images/marker.png",
                    size: new google.maps.Size(40, 60),
                };

                geocoder.geocode({ address: this.address }, (results, status) => {
                    this.markerA = new google.maps.Marker({
                        icon:image,
                        map: this.map,
                        position: results[0].geometry.location
                    });
                });

                geocoder.geocode({ address: foreignAddress }, (results, status) => {

                    this.markerB = new google.maps.Marker({
                        map: this.map,
                        position: results[0].geometry.location
                    });
                    this.markers.push(this.markerB);

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
                            window.alert('Het opgegeven adres werd niet gevonden.');
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
