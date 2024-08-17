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
<body>
	<body  background="abu.jpeg">
	<header>
		<div class="container">
<br>
		<h1><a href="dashboard.php">HULLER MAS</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="Prediksi.php">Prediksi</a></li>
			<!--<li><a href="nilaiminmax.php">Variabel</a></li>-->
			<li><a href="olahdata.php">Olah Data</a></li> 
			<li><a href="laporan.php">Laporan</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="Logout.php">Logout</a></li>
			
			<center>
		
		<?php 
date_default_timezone_set("Asia/Jakarta");
echo date('j/n/Y H:i:s');
		 ?>
		
		</center><br>
		</ul>
		</div>
	</header>	

	
		 <!--tabel-->
   			<div class="container">	
			<div class="box">
				<br>
				<center>
						<h2>TABEL HASIL INPUT DATA </h2>
						<br>
						<br>
						<center>
						<table border="1" cellspacing="" cellpadding="" width="50%">
						<tr style="text-align: center; font-weight: bold; background-color:#ffd700" >
							<th >No</th>
							<th >Tanggal</th>
							<th >Permintaan</th>
							<th >Persediaan</th>
							<th >Pengadaan</th>
							<th >Aksi</th>
								
						</tr>
						<?php
						include 'db.php';
						$no=1;
						$ambildata =mysqli_query($conn,"select * from tb_data");
						while ($tampil =mysqli_fetch_array($ambildata)){
							?>
							<tr style="text-align: center;">
							<td><?php echo $no++; ?></td>
							<td><?php echo $tampil['tanggal'];?></td>
							<td><?php echo $tampil['permintaan'];?></td>
							<td><?php echo $tampil['persediaan'];?></td>
							 <td><?php echo $tampil['pengadaan'];?></td>
						<td>
							<a href="edit.php?id_data=<?php echo $tampil['id_data'];?>" style="background-color:#009900">Edit</a>||
						||<a href="delete.php?id_data=<?php echo $tampil['id_data'];?>" style="background-color: #ff0000" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a></td> 
						</tr>
							<?php  	
						}
						?>	 
					</table>
	</center><br><br>
					<tr style="text-align: center; font-weight: bold;" >
					<a href="prediksi.php" style="padding: 8px 15px;color: #fff;border-radius: 2px" class="btn">(+)Tambah Data</a>
					</tr><br><br>
					
						
	<!--footer-->
				<footer>
					<div class="container">
						<small>Copyright &copy; 2023 - APKL Tsukamoto.</small>
					</div>
				</footer>

</body>
</html>