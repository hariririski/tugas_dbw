<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('share/header.php')?>
    <title>
      SITrans | Kontak
    </title>

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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

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

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             Kontak
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="#">
                  Beranda
                </a>
              </li>
              
              <li class="active">
                Kontak
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="about-carousel wow fadeInLeft">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item">
                  <img src="img/kontak/1.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      Gedung FMIPA Unsyiah
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/kontak/2.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      Gedung Lab Terpadu
                    </p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/kontak/3.jpg" alt="">
                  <div class="carousel-caption">
                    <p>
                      Gedung Lab Dasar
                    </p>
                  </div>
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left">
                </i>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 about wow fadeInRight">
		<h1>
              Info Kontak
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Alamat : Jalan Teuku Syah Abdul Raul, Syiah Kuala, Kota Banda Aceh, Aceh 24415</p>
              <p><i class="fa fa-globe pr-10"></i>Banda Aceh,Indonesia </p>
              <p><i class="fa fa-mobile pr-10"></i>Phone : 085260701396</p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">hariririski@gmail.com</a></p>
            </address>
        </div>
      </div>
      </div>

    <div class="gray-box">
      <div class="container">
        <div class="row">
         <?php include('share/profil_kecil.php')?>
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
                        <img alt="" src="maps/'.$data['icon'].'">
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
          </div>
      </div>
    </div>


    <div class="container" id="tourpackages-carousel">

      <div class="row">
        <div class="profile">
          <h2>
            Tim
          </h2>
		  
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
              <img src="img/hari.jpg" alt="" >
              <div class="caption">
                <h4>
                 Hariririski
                </h4>
                <p>
                 Semoga Dapat A Mata kuliah Ini!!
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="thumbnail wow fadeInUp" data-wow-delay=".3s">
              <img src="img/muammar.jpg" alt="">
              <div class="caption">
                <h4>
                  Mumammar Azli
                </h4>
                <p>
                Bulan 7 Naik Sidang!!!
                </p>
                <div class="team-social-link">
                  <a href="#">
                    <i class="fa fa-facebook">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-twitter">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-pinterest">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-linkedin">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-google-plus">
                    </i>
                  </a>
                  <a href="#">
                    <i class="fa fa-github">
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          
        </div>
        <!-- End row -->

      </div>
      <!-- End container -->
    </div>


    <!--container end-->

    <!--footer start-->
   <?php include'share/footer.php';?>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>

    <script src="js/jquery.easing.min.js">
    </script>
    <script src="js/link-hover.js">
    </script>
    <script src="js/wow.min.js">
    </script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>


    <script>

      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();


      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        }
                                   );
      }
                    );




      $(window).scroll(function() {
        $('#skillz').each(function(){
          var imagePos = $(this).offset().top;
          var viewportheight = window.innerHeight;

          var topOfWindow = $(window).scrollTop();
          if (imagePos < topOfWindow+viewportheight) {
            $('.skill_bar').fadeIn('slow');
            $('.skill_one').animate({
              width:'60%'}
                                    , 2000);
            $('.skill_two').animate({
              width:'90%'}
                                    , 2000);
            $('.skill_three').animate({
              width:'70%'}
                                      , 1000);
            $('.skill_four').animate({
              width:'55%'}
                                     , 1000);
            $('.skill_bar_progress p').fadeIn('slow',function(){

            }
                                             );
          }
        }
                         );
      }
                      );




    </script>

  </body>
</html>
