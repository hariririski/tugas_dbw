<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include('share/header.php')?>

    <title>SITrans | Peta</title>

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
    <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">
    <link href="css/component.css" rel="stylesheet" type="text/css">
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
                    <h1>Peta Lokasi</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Peta</a></li>
                        <li class="active">Pela Lokasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="component-bg">
        <div class="container mar-b-30">
           
            <div class="row">
            </div>
        </div>
    </div>
    <!--container end-->
	 <center><h1>Peta Lokasi </h1></center>
	  <div class="col-lg-10 col-sm-10 pull-center">
  <iframe class="animated fadeInDown wow" src="maps/lokasi_databases_baru.php" width="100%" height="615px" scrolling="no" frameborder="0"></iframe>
  </div>
  <center>
  <div class="col-lg-2 col-sm-2 pull-center">
                  <h3>Keterangan</h3>
			<br>
			
			<p><image src="maps/icon/lokasi_anda.png " width="20%">Lokasi Anda</p>
            <p ><image src="maps/icon/becak1.png " width="20%"> Pangkalan Becak</p>
            <p ><image src="maps/icon/bandara.png " width="20%"> Bandara</p>
            <p ><image src="maps/icon/pelabuhan.png " width="20%"> Pelabuhan</p>
            <p ><image src="maps/icon/angkot.png " width="20%"> Terminal Labi-Labi</p>
            <p ><image src="maps/icon/bus.png " width="20%"> Terminal</p>
            <p >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Penumpang</p>
            <p ><image src="maps/icon/barang.png " width="20%"> Terminal Barang</p>
			<br>  
                </div>
	 </center>
  
     <!--footer start-->
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
