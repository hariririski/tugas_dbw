
<?php

		$nama_kabupaten=$_POST['nama_kabupaten'];
		$nama_provinsi=$_POST['nama_provinsi'];
		
		include"../maps/db.php";
		$perintah="INSERT INTO `kabupaten_kota`( `nama_kabupaten_kota`, `id_provinsi`) VALUES ('$nama_kabupaten','$nama_provinsi')";
		$query = mysqli_query($con,$perintah);
		
		if ($query) {
				
				
				echo "<script type='text/javascript'>alert('Selamat Anda Telah menambah Kabupaten Baru');</script>";
				echo '<script>document.location = "../data_alamat.php"</script>';
				//header("location: ../data_alamat.php"); // Mengarahkan ke halaman profil
				
			
				
				
			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Kabupaten');</script>";
				echo '<script>document.location = "../data_alamat.php"</script>';
			}
				
				
	

?>