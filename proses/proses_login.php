
<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error

	if (empty($_POST['user']) || empty($_POST['pas'])) {
			echo $error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['user'];
		$password=$_POST['pas'];
		// Membangun koneksi ke database
		include('../maps/db.php');
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($con,$username);
		$password = mysqli_real_escape_string($con,$password);
		// Seleksi Database
		
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysqli_query($con,"select * from users where password='$password' AND username='$username'");
		
		$rows = mysqli_num_rows($query);
		
		
			if ($rows == 1) {
				
				
				$_SESSION['login']=$rows; // Membuat Sesi/session
				echo $rows;
				header("location: ../index.php"); // Mengarahkan ke halaman profil
				
			
				
				
			} else {
				$error = "Username atau Password belum terdaftar";
				echo $rows;
				header("location: ../indexy.php"); // Mengarahkan ke halaman profil
			}
				
				
	}

?>