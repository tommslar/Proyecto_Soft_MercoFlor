var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-35, -57.9);
  var mapOptions = {
    zoom: 8,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function initializeWithMarkers() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-35, -57.9);
  var mapOptions = {
    zoom: 12,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
  drawMarkers();
}

function codeAddress() {
	var address = document.getElementById('direccion').value;
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location
			});
		} else {
			alert('Geocode was not successful for the following reason: ' + status);
		}
	});
}

function drawMarkers() {
	for (i = 0; i < locations_menos.length; i++) {
		var dir_menos = locations_menos[i][1];
		var titulo_menos = locations_menos[i][0];
		geocoder.geocode({ 'address': dir_menos }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location,
				icon: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
				title: titulo_menos
			});
			var infowindow = new google.maps.InfoWindow({
				content: titulo_menos
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
			var circle = new google.maps.Circle({
				map: map,
				radius: 1000,
				fillColor: '#AA0000'
			});
			circle.bindTo('center', marker, 'position');
		}});
	}
	
	for (j = 0; j < locations_mas.length; j++) {
		var dir_mas = locations_mas[j][1];
		var titulo_mas = locations_mas[j][0];
		geocoder.geocode({ 'address': dir_mas }, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			var marker = new google.maps.Marker({
				map: map,
				position: results[0].geometry.location,
				icon: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png',
				title: titulo_mas
			});
			var infowindow = new google.maps.InfoWindow({
				content: titulo_mas
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
			var circle = new google.maps.Circle({
				map: map,
				radius: 1000,
				fillColor: '#00AA00'
			});
			circle.bindTo('center', marker, 'position');
		}});
	}
}

google.maps.event.addDomListener(window, 'load', initialize);