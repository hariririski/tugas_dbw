<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include('share/header.php')?>
    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
	<script type="text/javascript" src="js/jquery-gmaps-latlon-picker.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>



      <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
  
    <!--header end-->

    <!--breadcrumbs start-->
    
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="component-bg">
        <div class="container">
            <!-- Forms
================================================== -->
<div class="bs-docs-section mar-b-30">
  


  <h2 id="forms-horizontal">Tambah lokasi Transportasi</h2>
  
  <div class="bs-callout bs-callout-info">
    <form class="form-horizontal" role="form" action="proses/proses_tambah_lokasi_transportasi.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Transportasi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Alat Transportasi" required name="nama_transportasi">
        </div>
      </div>
	 
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Lintang</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword3" placeholder="Lintang" required name="lintang">
        </div>
      </div>
	  <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Bujur</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword3" placeholder="Bujur" required name="bujur">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Deskripsi" required name="deskripsi">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
        <div class="col-sm-10">
          <select class="form-control" name="nama_kategori">
		  <?php
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from kategori";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_kategori]'>$data[nama_kategori]</option>";
                 
                   }
					?>
    
			
		  </select>
        </div>
      </div>
	  <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Jalan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Jalan" required name="jalan">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
        <div class="col-sm-10">
          <select class="form-control" required name="nama_provinsi">
			<?php
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from provinsi";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_provinsi]'>$data[nama_provinsi]</option>";
                 
                   }
					?>
    
		  </select>
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kabupaten/Kota</label>
        <div class="col-sm-10">
          <select class="form-control" name="nama_kabupaten_kota">
			<?php
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from kabupaten_kota";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_kabupaten_kota]'>$data[nama_kabupaten_kota]</option>";
                 
                   }
					?>
    
		  </select>
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
        <div class="col-sm-10">
          <select class="form-control" name="nama_kecamatan">
			<?php
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from kecamatan";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_kecamatan]'>$data[nama_kecamatan]</option>";
                 
                   }
					?>
		  </select>
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Desa</label>
        <div class="col-sm-10">
          <select class="form-control" name="nama_desa">
			<?php
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from desa";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   echo "<option value='$data[id_desa]'>$data[nama_desa]</option>";
                 
                   }
					?>
		  </select>
        </div>
      </div>
       <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Upload Foto</label>
        <div class="col-sm-10">
           <input type="file" id="exampleInputFile" name='fileToUpload'>
       
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Tambah</button>
        </div>
      </div>
    </form>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  </div><!-- /.bs-example -->


</div>
        </div>
    </div>
    <!--container end-->

   

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

  </body>
</html>
