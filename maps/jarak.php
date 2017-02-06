<?php

$from=$_GET['name'];
$ukuran=strlen($from);
$ukuran=$ukuran-2;
$from=substr($from,1,$ukuran);

				include'db.php';
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
					echo '
					<table border="1" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Jarak/m</th>
						<th>Jarak/Km</th>
						<th>waktu</th>
						
						
						
					</tr>
					</thead>
					<tbody>
					';
					for($x=1;$x<=10;$x++)  
					   {
							$id= explode(",", $jumlah[$x]);
					$tampil = "SELECT * from transportasi where id_transportasi='$id[2]'";
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
                    <td class="center">'.$id[0].' m</td>
                    <td class="center">'.($id[0]/1000).' Km</td>
                    <td class="center">'.$Jam.' Jam, '.$Menit.' Menit, '.$M.'Detik,</td>
                    
                  </tr>';
					   
				   }  
					   } 
					   echo '
					   </tbody>
						</table>
						</div>
						</div>
						</div>';

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