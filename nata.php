<!DOCTYPE html>
<html>
<head>
	<title>Halo Mank Glen : )</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['khs']==""){header("location:index.php?pesan=gagal");}
 
	?>
	<h1 align="center" >Selamat Atas Hilangnya Status Mahasiswa</h1>
    <audio controls="" autoplay="" loop=""  >
   <source src="gg.ogg" type="audio/ogg">
    </audio>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai </b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 
	
</body>
</html>