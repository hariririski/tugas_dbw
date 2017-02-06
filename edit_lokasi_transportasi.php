<?php session_start();?>
<?php
					$id=$_GET['id'];
                  include'maps/db.php';
                  $i=0; 
                  $tampil2 = "SELECT * from desa,kabupaten_kota,kategori,kecamatan,provinsi,transportasi WHERE transportasi.id_desa=desa.id_desa and transportasi.id_kabupaten_kota=kabupaten_kota.id_kabupaten_kota and transportasi.id_kategori=kategori.id_kategori and transportasi.id_kecamatan=kecamatan.id_kecamatan and provinsi.id_provinsi and provinsi.id_provinsi=kabupaten_kota.id_provinsi and kabupaten_kota.id_kabupaten_kota=kecamatan.id_kabupaten_kota and kecamatan.id_kecamatan=desa.id_kecamatan and transportasi.id_transportasi='$id'";
                  $sql2 = mysqli_query($con,$tampil2);
                  while($data2 = mysqli_fetch_array($sql2))
                   {
                  
                   
  ?>
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
   <?php include'share/logo.php';?>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>EDIT</h1>
                </div>
                
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="component-bg">
        <div class="container">
            <!-- Forms
================================================== -->
<div class="bs-docs-section mar-b-30">
  


  <h2 id="forms-horizontal">Edit lokasi Transportasi</h2>
  
  <div class="bs-callout bs-callout-info">
    <form class="form-horizontal" role="form" action="proses/proses_edit_lokasi_transportasi.php?id_transportasi=<?php echo$data2['id_transportasi']?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama Transportasi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3"  name="nama_transportasi"required value="<?php echo$data2['nama']?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Lintang</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword3" name="lintang"placeholder="Password" required value="<?php echo$data2['lat']?>">
        </div>
      </div>
	  <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Bujur</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputPassword3" name="bujur" placeholder="Password" required value="<?php echo$data2['lon']?>">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPassword3" placeholder="Kosong" name="deskripsi" required value="<?php echo$data2['deskripsi']?>">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
        <div class="col-sm-10">
          <select class="form-control" name="nama_kategori">
		  <?php
                  include'maps/db.php';
                   echo "<option value='$data2[id_kategori]'>$data2[nama_kategori]</option>";
                  $tampil = "SELECT * from kategori  ORDER BY nama_kategori ASC";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                
				    if($data2['id_kategori']!=$data['id_kategori']){
                   echo "<option value='$data[id_kategori]'>$data[nama_kategori]</option>";
					}
                   }
					?>
    
			
		  </select>
        </div>
      </div>
	  <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Jalan</label>
        <div class="col-sm-10">
       <input type="text" class="form-control" id="inputPassword3" name="jalan" placeholder="Password" required value="<?php echo$data2['jalan']?>">
        </div>
      </div>
	   <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Provinsi</label>
        <div class="col-sm-10">
          <select class="form-control" required name="nama_provinsi">
			<?php
                  include'maps/db.php';
                 echo "<option value='$data2[id_provinsi]'>$data2[nama_provinsi]</option>";
                  $tampil = "SELECT * from provinsi ORDER BY nama_provinsi ASC";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                    if($data2['id_provinsi']!=$data['id_provinsi']){
                   echo "<option value='$data[id_provinsi]'>$data[nama_provinsi]</option>";
                 
                   }
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
			  echo "<option value='$data2[id_kabupaten_kota]'>$data2[nama_kabupaten_kota]</option>";
                  include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from kabupaten_kota ORDER BY nama_kabupaten_kota ASC";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   if($data2['id_kabupaten_kota']!=$data['id_kabupaten_kota']){
                echo "<option value='$data[id_kabupaten_kota]'>$data[nama_kabupaten_kota]</option>";
                 
                   
                  
				   }
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
				   echo "<option value='$data2[id_kecamatan]'>$data2[nama_kecamatan]</option>";
                  $tampil = "SELECT * from kecamatan ORDER BY nama_kecamatan ASC";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                    if($data2['id_kecamatan']!=$data['id_kecamatan']){
                   echo "<option value='$data[id_kecamatan]'>$data[nama_kecamatan]</option>";
					}
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
				  echo "<option value='$data2[id_desa]'>$data2[nama_desa]</option>";
                  $tampil = "SELECT * from desa ORDER BY nama_desa ASC";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                    if($data2['id_desa']!=$data['id_desa']){
                   echo "<option value='$data[id_desa]'>$data[nama_desa]</option>";
					}
                   }
					?>
		  </select>
        </div>
      </div>
	  
       <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Upload Foto</label>
        <div class="col-sm-10">
		<img src="maps/foto/<?php echo $data2['foto']?>" width="50%">
           <input type="file" id="exampleInputFile" name="fileToUpload">
       
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Simpan</button>
        </div>
      </div>
    </form>
  </div><!-- /.bs-example -->


</div>
        </div>
    </div>
    <!--container end-->

    <?php include'share/footer.php';?>

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
<?php }?>