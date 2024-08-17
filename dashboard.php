
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
<body background="abu.jpeg" >
	<header>
		<div class="container"  >
			<br>
		<h1><a href="dashboard.php">HULLER MAS</a></h1>

		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="Prediksi.php">Prediksi</a></li>
			<!--<li><a href="nilaiminmax.php">Variabel</a></li>-->
			<li><a href="olahdata.php">Olah Data</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="laporan.php">Laporan</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<center>

	<!--tanggal- waktu-->	
		<?php 
date_default_timezone_set("Asia/Jakarta");
echo date(' j/n/Y H:i:s');
		 ?>
		
		</center><br>
		</ul>
		</div>
	</header>
	</div>

	<!--content-->

			<div class="section">
				<div class="container">
					
					<div class="box"><br><br>
						<center>
						<table cellspacing="10" cellpadding="4">
						
							<tr>
								<td >
									<img src="beras.jpeg" width="300">
								</td>
								<td>
									<center>
									<h1 >" Welcome To <?php echo $_SESSION['a_global']->nama ?> "</h1>
									<h1>HULLER MAS</h1></center>
									
							<h4> Lokasi :</h4>
							<h4> Jorong Kawai, Nagari Batu Bulek, Kecamatan Lintau Buo Utara, Kabupaten Tanah Datar.</h4></td>
							</tr>
						</center>
						</table>
						
<br><br>
						<footer>
					<div class="container">
						<small>Copyright &copy; 2023 - APKL Tsukamoto.</small>
					</div>
				</footer>
					
			<!--footer-->
				
</body>
</html>