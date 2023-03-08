<!DOCTYPE html>
<html>
<head>
	<title>Halo Dimas</title>
	<link rel="stylesheet" type="text/css" href="card.css">

<link rel="icon" type="image/x-icon" href="cr.ico">
</head>
<body>
<?php 
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['khs']==""){header("location:index.php?pesan=gagal");}

?>

<audio controls="" autoplay="" loop=""  >
<source src="gg.ogg" type="audio/ogg">
</audio>

<h1 align="center" font-weight=100 >Selamat Atas Hilangnya Status Mahasiswa</h1>

<div align="center" class="card">
<img src="dimas.jpg" alt="Avatar" style="width:65%">
<div class="container">
<h1><b>Aditya Dimas Prasetyo</b></h1> 
<h3>Mantan Mahasiswa Teknik Mesin</h3> 
		<p>Selamat Atas Gelarnyo Maafkela kalu ad kesalahan dalam penolesan namo samo maaf dk pacak ngasih hadiah : D </p>
		<br>
		<br>
		<br>
		
		<hr>
		<p>klu ad kritik dan saran biso chat :v</p>

<a href="https://web.whatsapp.com/send/?phone=6282183999507&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank"><img src="wa.png" class="wa" alt></a> 
<a href="https://www.instagram.com/didi_p_haski" target="_blank"><img src="logo.png" class="logoig" alt></a>
<br>
<br>
<hr>

<h4>Balek Isi username Samo Password</h4>
<br><a href="logout.php"><img src ="ex.jpg" class="ex" alt></a>
</div>
</div>

</body>
</html>

