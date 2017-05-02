<template>
	<div class="map-wrapper">
		<div id="full-map"></div>
	</div>
</template>

<script>
	export default{
		props: ['kantoren'],
		data(){
			return {
				map: null,
				offices: JSON.parse(this.kantoren)
			}
		},
		methods:{
			createMap(){
				this.map = new google.maps.Map(document.querySelector('#full-map'), {
					zoom: 8,
					center: {lng: 4.3, lat: 50.91}
				});

				var geocoder = new google.maps.Geocoder();

				var image = {
					url: "/images/marker.png",
					size: new google.maps.Size(40, 60),
				};

				_.each(this.offices, (value, key) => {
					let address = value.address + ", " + value.postalcode + " " + value.city;
					console.log(address);
					geocoder.geocode({ address: address }, (results, status) => {
						if(status === google.maps.GeocoderStatus.OK){

							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h1 id="firstHeading" class="firstHeading"><a href="/kantoren/'+value.slug+'">'+ value.name +'</a></h1><p>'+address+'</p></div>';

							var infowindow = new google.maps.InfoWindow({
								content: contentString
							});

							var marker = new google.maps.Marker({
								icon: image,
								map: this.map,
								position: results[0].geometry.location
							});

							marker.addListener('click', function() {
								infowindow.open(this.map, marker);
							});
						}

					});
				});
			}
		},
		created(){
			Event.$on('MapsApiLoaded', () => {
				this.createMap();
			});
		}
	}
</script>

<style>
	#full-map{
		width:100%;
		height:400px;
	}
</style>