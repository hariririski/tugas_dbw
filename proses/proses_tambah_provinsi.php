
<?php

		$nama_provinsi=$_POST['nama_provinsi'];
		
		include"../maps/db.php";
		$perintah="INSERT INTO `provinsi`(`nama_provinsi`) VALUES ('$nama_provinsi')";
		$query = mysqli_query($con,$perintah);
		
		if ($query) {
				
				
				echo "<script type='text/javascript'>alert('Selamat Anda Telah menambah Provinsi Baru');</script>";
				echo '<script>document.location = "../data_alamat.php"</script>';
				//header("location: ../data_alamat.php"); // Mengarahkan ke halaman profil
				
			
				
				
			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Provinsi');</script>";
				echo '<script>document.location = "../data_alamat.php"</script>';
			}
				
				
	

?>