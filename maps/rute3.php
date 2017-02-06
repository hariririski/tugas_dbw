<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with <code>setPanel()</code></title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <style>
      #directions-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map-canvas {
        margin-right: 400px;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map-canvas {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var yogyakarta = new google.maps.LatLng(5.5556304,95.3408003);
  var mapOptions = {
    zoom:13,
    center: yogyakarta
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
directionsDisplay.setPanel(document.getElementById('directions-panel'));

var control = document.getElementById('control');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
}
calcRoute();
function calcRoute() {
	getLocation()
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else { 
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}
		
		function showPosition(position) {
		var gabung=position.coords.latitude+","+position.coords.longitude
			//x.innerHTML = gabung;
		
  var start = gabung;
  var end = document.getElementById('end').value;
		
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
		}
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="control">
      
    
    <strong>Tujuan :</strong>
    
	
    </div>
    <div id="directions-panel" style="width: 25%; height: 600px; margin: 0 auto"></div>
    <div id="map-canvas" style="width: 75%; height: 600px; margin: 0 auto"></div>
  </body>
</html>