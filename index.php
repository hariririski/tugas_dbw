<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('share/header.php')?>

    <title>
      SITrans| Home
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">

    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
	
    <?php include'share/logo.php';?>
    <!--header end-->

    <!-- Sequence Modern Slider -->
    <div id="da-slider" class="da-slider">

           


            <div class="da-slide">
            <div class="container">
        <div class="row">
          <div class="col-md-12">
        <h2>
		<font color="black">
          <i >Membantu Anda</i>
            <br />
          <i>Menemukan</i>
            <br />
          <i>Pangkalan Becak Terdekat</i>
        </h2>
		</font>
        <p><font color="black">
          <i>Memberikan 10 Pangkalan Becak Terdekat</i>
            <br />
          <i>Dengan Jarak Dan Waktu Tempuh</i>
        </p>
		</font>
        <a href="loading.php" class="btn btn-info btn-lg da-link">
          Selanjutnya
        </a>
        <div class="da-img">
          <img src="img/parallax-slider/images/becak.png" alt="image01" width="130%" />
        </div>
      </div>
          </div>
        </div>
      </div>
		<div class="da-slide">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
				
              <h2><font color="black">
                <i>Dijalankan</i>
                <br>
                <i>Dengan</i>
                <br>
                <i>Browser</i>
              </h2></font>
              <p><font color="black">
                <i>Mendukung Browser Ternama</i>
                <br />
                
              </p><font >
              
              <div class="da-img">
                <img src="img/parallax-slider/images/brower.png" alt="image01" width="160%"/>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="da-slide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
        <h2><font color="black">
          <i>Menampilkan Lokasi <br>Transportasi Dengan Peta</i>
            </br>
          <i>Serta</i>
            </br>
          <i>Rute Perjalanan</i>
        </h2> </font >
        <p>
          <i>Menampilkan Peta Serta rute <br> untuk Membantu Anda</i>
          <br />
          <i>Menuju Lokasi Yang Anda Inginkan</i>
          <br />
        
        </p>
       
        <div class="da-img">
          <img src="img/parallax-slider/images/Ipad Mini.png" alt="image01" width="130%" />
        </div>
      </div>
      </div>
      </div>
      </div>

      <nav class="da-arrows">
        <span class="da-arrows-prev">
        </span>
        <span class="da-arrows-next">
        </span>
      </nav>
    </div>


    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
             Selamat Datang Di Sistem Informasi Transportasi
            </h1>

          </div>


          <div class="feature-box">
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="img/tranport.jpg" alt="" width="130" height="100">

                </em>
                <h4>
                  <b>Transportasi Umum</b>
                </h4>
              </div>
              <p class="text-center">
			  Memberikan Informasi letak Dari Semua Transportasi Di 
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="img/TUGAS dbw.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Lokasi dan Rute Di Peta</b>
                </h4>
              </div>
              <p class="text-center">
			  Memberikan Lokasi dan Rute Tujuan Anda Di Tampilkan di Peta Google Maps
               </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="img/jam.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Jarak dan Waktu Ke Lokasi Tujuan</b>
                </h4>
              </div>
              <p class="text-center">
              Memberikan Jarak Dan Waktu Dari lokasi anda sekarang Ke Tempat Tujuan Anda
              </p>
            </div>
          </div>

          <!--feature end-->
        </div>
      </div>
    </div>


    <!--property start-->
    <div class="property gray-bg">
	
      <div class="container">
        <div class="row">
          <table border="0" width="100%">
		  <tr>
			  <td>
			   <center><h3>Peta Alat Transportasi</h3></center>
			  </td>
			  <td>
			   <h3>Keterangan</h3>
			  </td>
		  <tr>
			  <td width="85%">
				<iframe  src="maps/lokasi_databases_baru.php" width="100%" height="615px" scrolling="no" frameborder="0"></iframe>
			  </td>
			  <td>
				<p><image src="maps/icon/lokasi_anda.png " width="20%">Lokasi Anda</p>
				<p ><image src="maps/icon/becak1.png " width="20%"> Pangkalan Becak</p>
				<p ><image src="maps/icon/bandara.png " width="20%"> Bandara</p>
				<p ><image src="maps/icon/pelabuhan.png " width="20%"> Pelabuhan</p>
				<p ><image src="maps/icon/angkot.png " width="20%"> Terminal Labi-Labi</p>
				<p ><image src="maps/icon/bus.png " width="20%"> Terminal</p>
				<p >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Penumpang</p>
				<p ><image src="maps/icon/barang.png " width="20%"> Terminal Barang</p>
			  </td>
		  </tr>
		  </table>
		  <center> <a href="loading.php"><button class="btn btn-primary btn-lg">Cari Pangkalan Becak Terdekat</button><center></a>
        </div>
      </div>
    </div>
    <!--property end-->

    <div class="container">

      <div class="row mar-b-60">
    <div class="col-lg-6">
            <!--testimonial start-->
            <div class="about-testimonial boxed-style about-flexslider ">
              <section class="slider wow fadeInRight">
                <div class="flexslider">
                  <ul class="slides about-flex-slides">
				  <?php
                  include'maps/db.php';
                  $i=1;
                  $tampil = "SELECT kategori.nama_kategori, transportasi.nama,kategori.icon, COUNT(transportasi.id_kategori) FROM transportasi,kategori WHERE transportasi.id_kategori=kategori.id_kategori GROUP by kategori.id_kategori";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					 echo'
					<li>
                      <div class="about-testimonial-image ">
                        <img alt="" src="maps/'.$data['icon'].'" width="100%">
                      </div>
                      <a class="about-testimonial-author" href="#">
                        '.$data['nama_kategori'].'
                      </a>
                      <span class="about-testimonial-company">
                      
                      </span>
                      <div class="about-testimonial-content">
                        <p ><font size="5">
                        '.$data['COUNT(transportasi.id_kategori)'].' '.$data['nama_kategori'].'
                        </font></p>
                      </div>
                    </li>
					';
                   }
                  
              ?>
				
                  </ul>
                </div>
              </section>
            </div>
            <!--testimonial end-->
          </div>
		  
                 <?php include('share/profil_kecil.php')?>
        </div>
      </div>


      <!--recent work start-->
    


    <!--container end-->

    <!--footer start-->
    <?php include'share/footer.php';?>
    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="js/jquery-1.8.3.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script src="assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="js/jquery.easing.min.js">
    </script>
    <script src="js/link-hover.js">
    </script>
    <script src="js/superfish.js">
    </script>
    <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>
  </body>
</html>