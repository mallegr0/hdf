function myMap(){
	myCenter = new google.maps.LatLng(-32.9521708,-60.6322811);
	var  mapOptions = {
		center: myCenter,
		zoom: 12,
		scrollwheel: false,
		draggable: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapOptions);
	var marker = new google.maps.Marker({position: myCenter});
	marker.setMap(map);
}