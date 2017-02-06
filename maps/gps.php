<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
 <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Pure CSS Ajax Loader Demo 1</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Pete R. for Onextrapixel" />
		<link rel="shortcut icon" href="../file/favicon.gif"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />

		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.
 
var map;
var pos;
function initialize() {
  var mapOptions = {
    zoom: 6
  };
  map = (document.getElementById('map-canvas'),
      mapOptions);
 
  // Try HTML5 geolocation
  if(navigator.geolocation) {

    navigator.geolocation.getCurrentPosition(function(position) {
       pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);
	
	
	var javascriptVariable = pos;
  window.location.href = "../lokasi_terdekat.php?name="+javascriptVariable; 
	
	
      
 
      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}
 
function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }
 
  
 
 
}
 
google.maps.event.addDomListener(window, 'load', initialize);
 
    </script>
  </head>
  <body>
    <div id="map-canvas">
	<div class="container">
			<!-- Top Navi -->
			
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<div class="loader1">
	        	<i></i><i></i>
	      	</div>
		</div><!-- Container -->
	</div>
  </body>
</html>

