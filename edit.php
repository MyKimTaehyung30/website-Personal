 <?php 
 session_start();
 include 'db.php';
 if($_SESSION['status_login']!=true){
 	echo '<script>window.location="login.php"</script>';
 }
 ?>
 <?php 
include 'db.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tb_data WHERE id_data = '".$_GET['id_data']."'");
$result = mysqli_fetch_array($data_edit);

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
		<div class="container">
			<br>
		<h1><a href="dashboard.php">HULLER MAS</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="Prediksi.php">Prediksi</a></li>
			<li><a href="olahdata.php">Pengadaan</a></li>
			<li><a href="laporan.php">Laporan</a></li>
			<li><a href="profil.php">Profil</a></li>
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

	
	<!--input data-->
<div class="container">
	<div class="section">
		<div  class="box">
			<center>
					<form action="" method="POST" >
					<h2 >UPDATE TABEL PREDIKSI PENGADAAN</h2><br><br>
				<table cellpadding="0" cellspacing="10">
					<tr>
					<td colspan="2" >
					<a href="olahdata.php" style="padding: 8px 15px;background-color: #009900;color:#fff;border-radius: 2px">Tabel Data</a></td>
					<td></td>
					<td></td>
					</tr>
					<tr>
						<td><label for="id"><b>Id Data</b></label> </td>
						<td>:</td>
						<td><input type="text" name="iddata" id="id" value="<?php echo $result['id_data']?>" required class="input-control"></td>
					</tr>
	<tr>
		<td><label><b>Tanggal</b></label></td>
		<td>:</td>
		<td><input type="date" name="tanggal" value="<?php echo $result['tanggal']?>" required style="padding: 10px;margin-bottom: 15px"></td>
	</tr>

	<tr>
		<td ><label for="permintaan"><b>Permintaan</b></label></td>
		<td>:</td>
		<td><input type="text" name="permintaan" id="permintaan" value="<?php echo $result['permintaan']?>" required class="input-control"></td>
	</tr>

	<tr>
		<td><label for="persediaan"><b>Persediaan</b></label></td>
		<td>:</td>
		<td><input type="text" name="persediaan" id="persediaan" value="<?php echo $result['persediaan']?>" required class="input-control"></td>
	</tr>

	<tr>
		<td><label for="pengadaan"><b>Pengadaan</b></label></td>
		<td>:</td>
		<td><input type="text" name="pengadaan" id="pengadaan" value="<?php echo $result['pengadaan']?>"required class="input-control" ></td>
	</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="edit" value="Simpan" class="btn" /></td>
				</tr>					
			
					
					</table><br>
						</form>
					

					<!--simpan data ke database-->
						<?php
						if(isset($_POST['edit'])){
							$update = mysqli_query($conn, "UPDATE tb_data SET tanggal = '".$_POST['tanggal']."',permintaan ='".$_POST['permintaan']."',persediaan = '".$_POST['persediaan']."',pengadaan ='".$_POST['pengadaan']."' WHERE id_data = '".$_GET['id_data']."'");
							if($update){
								echo 'Berhasil Update';
							}else{
								echo 'Gagal Update';
							}
						}

						?>

					</div></div></div>



			<!--footer-->
				<footer>
					<div class="container">
						<small>Copyright &copy; 2023 - Tsukamoto.</small>
					</div>
				</footer>
</body>
</html>