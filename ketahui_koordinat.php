<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('share/header.php')?>

    <title>SITrans|Ketahui Koordinat</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>



      <!-- Custom styles for this template -->
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
                    <h1>Portfolio Single(image)</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li class="active">Portfolio single</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pf-img">
                     <img src="img/blog/img6.jpg" alt="" height="500">
                 </div>

            </div>
        </div>
    </div>

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--portfolio-single start-->

            <div class="col-lg-9 ">
                <div class="title">
                    <h3>Mirum est notare quam littera gothica</h3>
                    <hr>
                </div>
                <div class="pf-detail">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <p><button class="btn bg-maroon margin"><i class="fa fa-external-link pr-5"></i>Preview</button></p>
            </div>

            <div class="col-lg-3">
                <div class="title">
                    <h3>Product details</h3>
                    <hr>
                </div>
                <ul class="list-unstyled pf-list">
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Client: </b> <span><a href="#">wrapbootstrap</a></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Skills: </b><span><a href="#">WordPress</a>, <a href="#">HTML5</a></span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Colors: </b><span>blue, gray, purple</span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Release Date: </b><span>06 January, 2014</span></li>
                    <li><i class="fa fa-arrow-circle-right pr-10"></i><b>Launch Project: </b><span><a href="www.wrapbootstrap.com">wrapbootstrap</a></span></li>
                </ul>
             </div>
        </div>
        <ul class="pager">
          <li class="previous"><a href="#">&larr; Older</a></li>
          <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
        <hr>
    </div>

    <div class="container">
         <!--recent work start-->
        <div class="row">
            <div class="col-lg-12 recent">
                <h3>Related Work</h3>
                <p>Some of our work we have done earlier</p>
                <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">

                  <div class="item view view-tenth">
                    <img src="img/works/img8.jpg" alt="work Image">
                    <div class="mask">
                        <a href="portfolio-single-image.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                        <i class="fa fa-link"></i>
                        </a>
                    </div>
                  </div>
                  <div class="item view view-tenth">
                    <img src="img/works/img9.jpg" alt="work Image">
                    <div class="mask">
                        <a href="portfolio-single-image.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                        <i class="fa fa-link"></i>
                        </a>
                    </div>
                  </div>
                  <div class="item view view-tenth">
                    <img src="img/works/img10.jpg" alt="work Image">
                    <div class="mask">
                        <a href="portfolio-single-image.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                        <i class="fa fa-link"></i>
                        </a>
                    </div>
                  </div>
                  <div class="item view view-tenth">
                    <img src="img/works/img11.jpg" alt="work Image">
                    <div class="mask">
                        <a href="portfolio-single-image.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                        <i class="fa fa-link"></i>
                        </a>
                    </div>
                  </div>
                  <div class="item view view-tenth">
                    <img src="img/works/img12.jpg" alt="work Image">
                    <div class="mask">
                        <a href="blog_detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                        <i class="fa fa-link"></i>
                        </a>
                    </div>
                  </div>
                  <div class="item view view-tenth">
                    <img src="img/works/img13.jpg" alt="work Image">
                    <div class="mask">
                        <a href="blog_detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                        <i class="fa fa-link"></i>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!--recent work end-->
     </div>

     <!--footer start-->
     <?php include'share/footer.php';?>

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>


    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>


  <script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            items : 4
        });

      });
    new WOW().init();
  </script>

  </body>
</html>
