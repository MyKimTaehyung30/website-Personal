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
<body background="abu.jpeg">
	<header>
		<div class="container">
			<br>
		<h1><a href="dashboard.php">HULLER MAS</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="Prediksi.php">Prediksi</a></li>
			<li><a href="olahdata.php">Olah Data</a></li>
			<li><a href="laporan.php">Laporan</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<center>
		
		<?php 
date_default_timezone_set("Asia/Jakarta");
// fungsi waktu di php
// N -> Urutan hari, jumat,1=>senin, 2=>Selasa, 5=>jumat
// j ->tanggal
// n ->bulan
// Y -> tahun
// H -> jam
// i -> menit
// s-> detik
echo date(' j/n/Y H:i:s');
		 ?>
		
		</center><br>
		</ul>
		</div>
	</header>	
	</div>

			<!--laporan-->
			<!--tabel-->
<div class="container">
	<div class="section"></div>
			<div class="box">
				<br>
				<center>
						
						
						<h2>LAPORAN PREDIKSI PENGADAAN PADI</h2>
						<h2>HULLER MAS</h2>
						
						<br>
						<table border="1" width="50%">
						<tr style="text-align: center; font-weight: bold; background-color:#ffd700">
							<th >No</th>
							<th >Tanggal</th>
							<th >Permintaan</th>
							<th >Persediaan</th>
							<th >Pengadaan</th>
							
								
						</tr>
						<?php
						include 'db.php';
						$no=1;
						$ambildata =mysqli_query($conn,"select * from tb_data");
						while ($tampil =mysqli_fetch_array($ambildata)){
							?>
							<tr>
							<td align="center"><?php echo $no++; ?></td>
							<td align="center"><?php echo $tampil['tanggal'];?></td>
							<td align="center"><?php echo $tampil['permintaan'];?></td>
							<td align="center"><?php echo $tampil['persediaan'];?></td>
							<td align="center"><?php echo $tampil['pengadaan'];?></td>
						</tr>
							<?php  	
						}
						?>	 
					</table>
				</center>
				<br>
				<center>
					<a href="cetak.php" target="_blank"><input type="submit" value="PRINT" class="btn"></a>
				
				</center>
				<label></label>
				<!--footer-->
				<footer>
					<div class="container">
						<small>Copyright &copy; 2023 - APKL Tsukamoto.</small>
					</div>
				</footer>
					</div>  
			
			
</body>
</html>