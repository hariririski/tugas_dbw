<html>
<head>
<script>
$('#mymodal').on('shown', function () {
  google.maps.event.trigger(map, 'resize');
  map.setCenter(new google.maps.LatLng(42.7369792, -84.48386540000001));
});
</script>
</head>
<body>
<div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <?php
		  $lokasi=$_GET['gambar'];
		  $anda=$_GET['anda'];
		  
                 
		  
		  
		  ?>

          <h4 class="modal-title">Peta Rute</h4>
        </div>
        <div class="modal-body">
         
		 
         	<iframe  src="maps/rute_pangkalan.php?id=<?php echo $lokasi ?>&&anda=<?php echo $anda?>" width="100%" height="505px" scrolling="Yes" frameborder="0"></iframe>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
	 
	  </body>
	  </html>