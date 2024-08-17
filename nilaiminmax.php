
<?php 
 /*session_start();
 include 'db.php';
 if($_SESSION['status_login'] != true){
 	echo '<script>window.location="login.php"</script>';
 }
 ?>

<?php
include 'db.php';
$query = mysqli_query($conn, "SELECT * FROM tb_nilaiminmax WHERE id_nilai = '".$_GET['id_nilai']."'");
$d = mysqli_fetch_array($query);
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
			<li><a href="nilaiminmax.php">Variabel</a></li>
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
					
					<div class="box"><br>
						<h2>NILAI RANGE MIN-MAX </h2>
						<br>
						<table>

	<td><input type="text" name="id_nilai"  value="<?php echo $d['id_nilai']?>" required class="input-control"></td>
					</tr>
							<tr >
<td><input type="text" name="permin_max" value="<?php echo $d['permin_max']?>" class="input-control"></td>
							</tr>
							<tr>
<td><input type="text" name="permin_min" value="<?php echo $d['permin_min']?>"  class="input-control"></td>
							</tr>
							<tr>
<td><input type="text" name="perse_max" value="<?php echo $d['perse_max']?>"  class="input-control"></td>
							</tr>
							<tr>
<td><input type="text" name="perse_min" value="<?php echo $d['perse_min']?>" class="input-control"></td>
							</tr>
							<tr>
<td><input type="text" name="penga_max" value="<?php echo $d['penga_max']?>"  class="input-control"></td>
							</tr>
							<tr>
<td><input type="text" name="penga_min" value="<?php echo $d['penga_min']?>" class="input-control"></td>
							</tr>

						</table>
						
						<footer>
					<div class="container">
						<small>Copyright &copy; 2023 - APKL Tsukamoto.</small>
					</div>
				</footer>
					
			<!--footer-->
				
</body>
</html>*/