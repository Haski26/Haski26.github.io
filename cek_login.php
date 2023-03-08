<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['khs']=="glen"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['khs'] = "glen";
		// alihkan ke halaman dashboard admin
		header("location:glen.php");}
 
		else if($data['khs']=="nata"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['khs'] = "nata";
		// alihkan ke halaman dashboard pengurus
		header("location:nata.php");}

		else if($data['khs']=="dms"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['khs'] = "dms";
			// alihkan ke halaman dashboard pengurus
			header("location:dimas.php");}

		else if($data['khs']=="andes"){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['khs'] = "andes";
				// alihkan ke halaman dashboard pengurus
				header("location:andes.php");}

				else if($data['khs']=="bina"){
					// buat session login dan username
					$_SESSION['username'] = $username;
					$_SESSION['khs'] = "bina";
					// alihkan ke halaman dashboard pengurus
					header("location:bina.php");}

					else if($data['khs']=="why"){
						// buat session login dan username
						$_SESSION['username'] = $username;
						$_SESSION['khs'] = "why";
						// alihkan ke halaman dashboard pengurus
						header("location:wahyu.php");}
		
		
}
else{
	header("location:index.php?pesan=gagal");
}
 
?>