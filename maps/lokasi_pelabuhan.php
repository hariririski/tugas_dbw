<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Latihan Google  map</title>
  <style type='text/css'>
  #peta {
  width: 100%;
  height: 400px;

} </style>
    
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	
 
	<script src="jquery.js"></script>
	
   <script type="text/javascript">
   
	
	
	(function() {
  window.onload = function() {
var map;
    var locations = [
   <?php
         //konfgurasi koneksi database 
          mysql_connect('localhost','root','');
	      mysql_select_db('dbw');
		  
            	$sql_lokasi="select *
            	from lokasi  ";
            	$result=mysql_query($sql_lokasi);
				// ambil nama,lat dan lon dari table lokasi
            	while($data=mysql_fetch_object($result)){
            		 ?>
             ['<?=$data->idlokasi;?>', <?=$data->lat;?>, <?=$data->lon;?>,'<?=$data->icon;?>'],
       <?php
				}
		?>		
    
    ];

    //Parameter Google maps
    var options = {
      zoom: 13, //level zoom
	  //posisi tengah peta
      center: new google.maps.LatLng(5.5595601,95.3226903),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
	 if(navigator.geolocation) {
 
        function visitorLocation(position) {
            var point = new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
 
           
           
            marker = new google.maps.Marker({
                position: point,
                map: map,
                title: "Anda Disini"
            });
        }
        navigator.geolocation.getCurrentPosition(visitorLocation);
    }
	 // Buat peta di 
    var map = new google.maps.Map(document.getElementById('peta'), options);
	 // Tambahkan Marker 
  
	  var infowindow = new google.maps.InfoWindow();

    var marker, i;
     /* kode untuk menampilkan banyak marker */
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
		 icon: locations[i][3]
      });
     /* menambahkan event clik untuk menampikan
     	 infowindows dengan isi sesuai denga
	    marker yang di klik */
		
    		google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
			return function() { 
				var id= locations[i][0];
	
				$.ajax({
					url : "get_info.php",
					data : "id=" +id ,
					success : function(data) {
							infowindow.setContent(data);
							infowindow.open(map, marker);
					}
				});		
			}
		})(marker, i));
		marker.addListener('mouseout', function() {
    infowindow.close();
});
    }

  };
})();

	</script>
  </head>
  <body>
    
    <div id="peta"  style="width: 100%; height: 599px; margin: 0 auto" ></div>

  </body>
</html>