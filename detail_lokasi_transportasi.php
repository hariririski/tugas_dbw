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
		  $gambar=$_GET['gambar'];
		  
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from desa,kabupaten_kota,kategori,kecamatan,provinsi,transportasi WHERE transportasi.id_desa=desa.id_desa and transportasi.id_kabupaten_kota=kabupaten_kota.id_kabupaten_kota and transportasi.id_kategori=kategori.id_kategori and transportasi.id_kecamatan=kecamatan.id_kecamatan and provinsi.id_provinsi and provinsi.id_provinsi=kabupaten_kota.id_provinsi and kabupaten_kota.id_kabupaten_kota=kecamatan.id_kabupaten_kota and kecamatan.id_kecamatan=desa.id_kecamatan and transportasi.id_transportasi='$gambar'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
		  
		  
		  ?>

          <h4 class="modal-title"><?php echo $data['nama']?></h4>
        </div>
        <div class="modal-body">
         <table>
		 <tr>
			 <td>
			 Nama
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Foto
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo '<img src="maps/foto/'.$data['foto'].'" width="100%">' ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Deskripsi
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['deskripsi'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Kategori
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_kategori'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Jalan
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['jalan'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Provinsi
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_provinsi'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Kabupaten/Kota
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_kabupaten_kota'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Kecamatan
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_kecamatan'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Desa
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['nama_desa'] ?>
			 </td>
		 </tr>
		 <tr>
			 <td>
			 Koordinat
			 </td>
			 <td>
			 :
			 </td>
			 <td>
			 <?php echo $data['lat'].",".$data['lon'] ?>
			 
			 </td>
		 </tr>
		<table>
         	<iframe  src="perlokasi.php?lokasi=<?php echo $data['lat'].",".$data['lon'] ?>" width="100%" height="305px" scrolling="no" frameborder="0"></iframe>
		  
  <center>
  <a href="edit_lokasi_transportasi.php?id=<?php echo  $data['id_transportasi'] ?>"><button class="btn btn-primary btn-lg">Edit</button></a>
  <a href="proses/proses_hapus_lokasi_transportasi.php?id=<?php echo  $data['id_transportasi'] ?>"><button class="btn btn-danger btn-lg">Hapus</button></a>
  </center>
  <?php
                   }
  ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
	 
	  </body>
	  </html>