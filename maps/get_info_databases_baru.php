	<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->

    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="../stylesheet" href="css/flexslider.css"/>
    <link href="../assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="../stylesheet" href="css/animate.css">
    <link rel="../stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="../stylesheet" href="assets/owlcarousel/owl.theme.css">

    <link href="../css/superfish.css" rel="stylesheet" media="screen">
   


    <!-- Custom styles for this template -->
    <link rel="../stylesheet" type="text/css" href="css/component.css">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
	
 </head>
</body>
<?php
         //konfgurasi koneksi database 
         include'db.php';
		  $id=$_GET['id'];
		  $lokasi=$_GET['l'];
            	$sql_lokasi="SELECT * from desa,kabupaten_kota,kategori,kecamatan,provinsi,transportasi WHERE transportasi.id_desa=desa.id_desa and transportasi.id_kabupaten_kota=kabupaten_kota.id_kabupaten_kota and transportasi.id_kategori=kategori.id_kategori and transportasi.id_kecamatan=kecamatan.id_kecamatan and provinsi.id_provinsi and provinsi.id_provinsi=kabupaten_kota.id_provinsi and kabupaten_kota.id_kabupaten_kota=kecamatan.id_kabupaten_kota and kecamatan.id_kecamatan=desa.id_kecamatan and id_transportasi='$id'";
            	$result=mysqli_query($con,$sql_lokasi);
				// ambil nama,lat dan lon dari table lokasi
            	while($data=mysqli_fetch_object($result)){
            		 ?>
             
       	
	<div id="content"><div id="siteNotice"></div>
    <center><h3 id="firstHeading" class="firstHeading"><?php echo $data->nama ?></h3><div id="bodyContent"> </center>
	<table>
	<tr>
	<td>
	<img src="foto/<?php echo $data->foto?>" width="250px" alt="" title='<?php echo $data->nama ?>'  >
	</td>
	<td>
	<table>
	<tr>
	<td>
	<p><?php echo $data->jalan.", ".$data->nama_desa.", ".$data->nama_kecamatan.", ".$data->nama_kabupaten_kota.", ".$data->nama_provinsi?></p> 
	</td>
	</tr>
	<tr>
	<td>
	<p><?php echo $data->deskripsi ?></p>
	</td>
	</tr>
	
					
					</td>
	</table>
	
   
	</td>
	<td>
	</td>
	</tr>
	</table>
	<center>
			<a href="print.html"  onclick="window.open('rute_pangkalan.php?id=<?php echo $data->lat.",".$data->lon;?>&&anda=<?php echo $lokasi?>', 'newwindow', 'width=700, height=550'); return false;">
				   <button class="btn btn-primary btn-lg" >Lihat Rute</button></a>
	</center>
		
			
					
			
	
	
    <br>
	
	
    </div></div>
	<?php
				}
		?>
		
<script type="text/javascript">
			$('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
			$.fn.modal.Constructor.prototype.enforceFocus = function() {};
		</script>
</body>
</html>