<?php 
 session_start();
 if($_SESSION['status_login'] != true){
 	echo '<script>window.location="login.php"</script>';
 }

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewerport" content="width=device-width, initial-scale=1">
	<title>TSUKAMOTO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body  background="abu.jpeg">
	<header>
		<div class="container"><br>
		<h1><a href="dashboard.php">HULLER MAS</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="Prediksi.php">Prediksi</a></li>
			<li><a href="olahdata.php">Olah Data</a></li>
      		<li><a href="laporan.php">Laporan</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<center>
	<!--tgl dan jam-->	
		<?php 
date_default_timezone_set("Asia/Jakarta");
echo date(' j/n/Y H:i:s');
		 ?>
		
		</center><br>
		</ul>
		</div>
	</header>	

	<!--content-->
<form >
	<center>
	<div class="container" ><br>
		
		<div class="box">
			<h2>.:: DATA PENULIS ::.</h2>
			<br><br>
			<table cellspacing="8">
			<tr>
				<td>
					<!--<picture>
						<img src="FT.jpg" width="80">
					</picture>-->
				</td>
				<td>
			<li>No Bp : 20101152610019</li>
			<li>Nama  : Icha Indriani</li>
			<li>Kelas : Sistem Informasi-1</li></td>
			<td>
				<!--<picture>
						<img src="NR.jpg" width="80">
					</picture>-->
			</td>
				<td>
			<li>No Bp : 20101152610504</li>
			<li>Nama  : Nurul Rahmadani</li>
			<li>Kelas : Sistem Informasi-12</li>
				</td>
				
			</tr>
			</table>
			
			<br><br>
			<h3>FAKULTAS ILMU KOMPUTER</h3>
			<br>
			<h3>UNIVERSITAS PUTRA INDONESIA "YPTK" PADANG</h3>
			<h3>TAHUN AJARAN 2022/2023</h3>
			<br><br>
		

 <!--footer-->
				<footer>
					<div class="container"><br>
						<small>Copyright &copy; 2023 -APKL Tsukamoto.</small>
					</div>
				</footer>
</form>
</div>
	</div>
			
</body>
</html>