<!DOCTYPE html>
<html>
<head>
	<title>Halo Wahyu : )</title>
    <link rel="stylesheet" type="text/css" href="card.css">

	<link rel="icon" type="image/x-icon" href="cr.ico">
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


    <div align="center" class="card">
  <img src="img_avatar2.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Jane Doe</b></h4> 
    <p>Interior Designer</p> 
    <a href="https://web.whatsapp.com/send/?phone=6282183999507&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank">wa</a> 
  </div>
</div>


	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai </b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 
	
</body>
</html>