
<?php

		$id=$_GET['id'];
		
		
		include"../maps/db.php";
		$perintah="DELETE FROM `transportasi` WHERE id_transportasi='$id'";
		$query = mysqli_query($con,$perintah);
		
		if ($query) {
				
				
				echo "<script type='text/javascript'>alert('Selamat Anda Telah Mengahapus Data');</script>";
				echo '<script>document.location = "../data_lokasi_transportasi.php"</script>';
				//header("location: ../data_alamat.php"); // Mengarahkan ke halaman profil
				
			
				
				
			} else {
				echo "<script type='text/javascript'>alert('Maaf Anda Gagal Mengahapus Data');</script>";
				echo '<script>document.location = "../data_lokasi_transportasi.php"</script>';
			}
				
				
	

?>