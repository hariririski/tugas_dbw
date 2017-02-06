<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('share/header.php')?>

    <title>
      SITrans | Pangkalan Becak Terdekat
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
	
	<link href="table/css1/charisma-app.css" rel="stylesheet">
    
    <link href='table/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
<style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
    </style>
    <style>
      #directions-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map-canvas {
        margin-right: 400px;
      }

      #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map-canvas {
          height: 500px;
          margin: 0;
        }

        #directions-panel {
          float: none;
          width: auto;
        }
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var yogyakarta = new google.maps.LatLng(5.5556304,95.3408003);
  var mapOptions = {
    zoom:13,
    center: yogyakarta
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  directionsDisplay.setMap(map);
directionsDisplay.setPanel(document.getElementById('directions-panel'));

var control = document.getElementById('control');
  control.style.display = 'block';
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
}

function calcRoute() {
	getLocation()
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else { 
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}
		
		function showPosition(position) {
		var gabung=position.coords.latitude+","+position.coords.longitude
			//x.innerHTML = gabung;
		
  var start = gabung;
  var end = document.getElementById('end').value;
		
  var request = {
      origin:start,
      destination:end,
      travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    }
  });
		}
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

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
              Pangkalan Becak Terdekat
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
                Pangkalan Becak Terdekat
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->
 
   <div id="content" class="col-lg-12 col-sm-12">
            <!-- content starts -->
                

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2>Data Lokasi</h2>

        <div class="box-icon">
            
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Pangkalan</th>
        <th>Alamat</th>
        <th>Jarak (m)</th>
        <th>jarak (Km)</th>
        <th>Waktu</th>
        <th>Peta</th>
        
        
        
    </tr>
    </thead>
    <tbody>
	<?php
$from=$_GET['name'];
$ukuran=strlen($from);
$ukuran=$ukuran-2;
$from=substr($from,1,$ukuran);
$anda=explode(",",$from);
$anda[0]=substr($anda[0],0,10);
$anda[1]=substr($anda[1],1,10);
				include'maps/db.php';
                  $i=0; 
                  $tampil = "SELECT * from transportasi where id_kategori=5";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  $to=$data['lat'].",".$data['lon'] ;
				  $id=$data['id_transportasi'];
                  $jumlah[$i]=(jarak($from,$to,$id)).",".$id;
                   }
				   $array_length=count($jumlah);
				   for ($i = 1; $i <= $array_length; ++$i)
						{
							for ($j = $i + 1; $j <=$array_length; ++$j)
							{
								$joinString1 = explode(",", $jumlah[$i]);
								$joinString2 = explode(",", $jumlah[$j]);
								
								if ($joinString1[0] > $joinString2[0])
								{
									$a =  $jumlah[$i];
									$jumlah[$i] = $jumlah[$j];
									$jumlah[$j] = $a;
								}
							}
						}
	
	?>
    <?php
                  
                  for($x=1;$x<=10;$x++)  
					   {
							$id= explode(",", $jumlah[$x]);
					$tampil = "SELECT * from desa,kabupaten_kota,kategori,kecamatan,provinsi,transportasi WHERE transportasi.id_desa=desa.id_desa and transportasi.id_kabupaten_kota=kabupaten_kota.id_kabupaten_kota and transportasi.id_kategori=kategori.id_kategori and transportasi.id_kecamatan=kecamatan.id_kecamatan and provinsi.id_provinsi and provinsi.id_provinsi=kabupaten_kota.id_provinsi and kabupaten_kota.id_kabupaten_kota=kecamatan.id_kabupaten_kota and kecamatan.id_kecamatan=desa.id_kecamatan and transportasi.id_transportasi='$id[2]'";
					$sql = mysqli_query($con,$tampil);
					while($data = mysqli_fetch_array($sql))
                   {
					   $TDetik = $id[1];
						$sj = 3600;
						$sm = 60;

						$J = $TDetik % $sj;
						$SJam = $TDetik - $J;
						$Jam = $SJam / $sj;

						$M = $J % $sm;
						$SMenit = $J - $M;
						$Menit = $SMenit / $sm;
					   echo '
                   <tr>
                    <td width="30px">'.$x.'</td>
                    <td class="center">'.$data['nama'].'</td>
                    <td class="center">'.$data['jalan'].', '.$data['nama_desa'].', '.$data['nama_kecamatan'].', '.$data['nama_kabupaten_kota'].', '.$data['nama_provinsi'].'</td>
                
                    <td class="center">'.$id[0].' m</td>
                    <td class="center">'.($id[0]/1000).' Km</td>
                    <td class="center">'.$Jam.' Jam, '.$Menit.' Menit, '.$M.'Detik,</td>
                    
                  ';
				  ?>
				   <td><!--<a href="print.html"  onclick="window.open('maps/rute_pangkalan.php?id=<?php echo $data['lat'].",".$data['lon'];?>&&anda=<?php echo $from?>', 'newwindow', 'width=700, height=550'); return false;">
				   <button class="btn btn-primary btn-lg" >Peta</button></a>-->
				   <a href="detail_rute.php?gambar=<?php echo $data['lat'].",".$data['lon'] ?>&&anda=<?php echo $anda[0].','.$anda[1] ?>" data-toggle="modal" data-target="#myModal"><button class="btn btn-primary btn-lg">Detail</button><center></a>
				   
				   </td>
	
					
					</td></tr>
					<?php
				   }  
					   } 
	include('modala.php');				   
  ?>
 
    <?php
	function jarak($from,$to,$id){
$from = urlencode($from);
$to = urlencode($to);

$data = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?key=AIzaSyBJEyzwKXH2n9SpdmUoRQqWbtvOVSLukyw&origins=$from&destinations=$to&language=id-ID&sensor=false");
$data = json_decode($data);

$time = 0;
$distance = 0;

foreach($data->rows[0]->elements as $road) {
    $time += $road->duration->value;
    $distance += $road->distance->value;
}
//echo "-------------------------------------------------------------------";
//echo "<br>";
//echo "Asal: ".$data->destination_addresses[0];
//echo "<br>";
//echo "Tujuan: ".$data->origin_addresses[0];
//echo "<br>";
//echo "id ".$id;
//echo "<br>";
//echo "Estimasi Waktu: ".$time." detik atau setara dengan " . gmdate('H', $time) . " jam " . gmdate('i', $time) . " menit";
//echo "<br>";
//echo "Jarak: ".$distance." m atau " .floor($distance / 1000). " km";
//echo "<br>";
//echo "-------------------------------------------------------------------";
//echo "<br>";
//echo "<br>";
//echo "<br>";

return ($distance.",".$time);
}
?>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
        </div>


  </div>
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
	
<script src="table/abower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="table/js/jquery.cookie.js"></script>
<!-- calender plugin -->

<!-- data table plugin -->
<script src='table/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="table/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="table/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="table/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="table/bower_components/responsive-tables/responsive-tables.js"></script>

<!-- star rating plugin -->
<script src="table/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="table/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="table/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="table/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="table/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="table/js/charisma.js"></script>
<script type="text/javascript">
			$('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
			$.fn.modal.Constructor.prototype.enforceFocus = function() {};
		</script>
  </body>
</html>
