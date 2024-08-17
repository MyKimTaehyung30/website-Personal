 <?php 
 session_start();
 include 'db.php';
 if($_SESSION['status_login']!=true){
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
		<div class="container">
			<br>
		<h1><a href="dashboard.php">HULLER MAS</a></h1>
		<ul>
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="Prediksi.php">Prediksi</a></li>
			<li><a href="olahdata.php">Olah Data</a></li>
			<li><a href="laporan.php">Laporan</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<center>
		
		<?php 
date_default_timezone_set("Asia/Jakarta");
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
					<h2 >INPUTKAN HASIL PROSES PERHITUNGAN</h2>
					<h2>DARI TABEL</h2><br>

				<table cellpadding="5" cellspacing="">
	<tr>
		<td><label><b>Tanggal  </b></label></td>
		<td><input type="date" name="tanggal" placeholder=" mm/dd/yyyy " style="padding: 5px 10px;margin-bottom: 10px" required></td>
	</tr>

	<tr>
		<td width="130"><label for="permintaan"><b>Permintaan  </b></label></td>
		<td><input type="text" name="permintaan" placeholder=" Permintaan " id="permintaan"  style="padding: 5px 10px;margin-bottom: 10px" required ></td>
	</tr>

	<tr>
		<td><label for="persediaan"><b>Persediaan  </b></label></td>
		<td><input type="text" name="persediaan" placeholder=" Persediaan " id="persediaan"  style="padding: 5px 10px;margin-bottom: 10px"  required></td>
	</tr>

	<tr>
		<td><label for="pengadaan"><b>Pengadaan </b></label></td>
		<td><input type="text" name="pengadaan" placeholder=" Pengadaan "  id="pengadaan"  style="padding: 5px 10px;margin-bottom: 10px" required ></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="proses" value="save" class="btn" />
					<input type="reset" name="reset" value="Clear" class="btn" /></td>
				</tr>
			</table>
					</form>
					

					<!--simpan data ke database-->
						<?php
						include "db.php";
						if(isset($_POST['proses'])){
							mysqli_query($conn,"insert into tb_data set
								tanggal ='$_POST[tanggal]',
								permintaan='$_POST[permintaan]',
								persediaan='$_POST[persediaan]',
								pengadaan='$_POST[pengadaan]'");
							
							echo '<script>window.location="olahdata.php"</script>';

						}

						?>

					</div></div></div>



<!--prediksi-->
		<section class="atas">
		   <div id="head">

</section>
<section >
<?php
function turun($min,$maks,$inp){
    $turun = 0;
	if($inp<=$min){
	    $turun = 1;
	}else if($inp>$min && $inp<=$maks){
	    $turun = ($maks-$inp)/($maks-$min);
	}else{
        $turun = 0;
	}
	return $turun;
}
function naik($min,$maks,$inp){
    $naik = 0;
	if($inp<=$min){
	    $naik = 0;
	}else if($inp>$min && $inp<=$maks){
	    $naik = ($inp-$min)/($maks-$min);
	}else{
        $naik = 1;
	}
	return $naik;
}
function zturun($min,$maks,$turun){
    $inp = ($turun*($maks-$min))-$maks;
	if($inp<0){
	    $inp=$inp*-1;
	}
	return $inp;
}
function znaik($min,$maks,$naik){
	$inp = ($naik*($maks-$min))+$min;
	return $inp;
}
$inp1="";
$inp2="";
$pmT=0;
$pmN=0;
$psT=0;
$psN=0;
if(isset($_POST['aksi'])){
    $inp1=$_POST['inp1'];//permintaan
    $inp2=$_POST['inp2'];//persediaan
    $pmT=turun(20,38,$inp1);
	$pmN=naik(20,38,$inp1);
	$psT=turun(21,35,$inp2);
	$psN=naik(21,35,$inp2); 
	$rule1 = min($pmT,$psN);
	$rule2 = min($pmT,$psT);
	$rule3 = min($pmN,$psN);
	$rule4 = min($pmN,$psT);
	$z1=zturun(20,44,$rule1);
	$z2=zturun(20,44,$rule2);
	$z3=znaik(20,44,$rule3);
	$z4=znaik(20,44,$rule4);
	$Pengadaan = (($rule1*$z1)+($rule2*$z2)+($rule3*$z3)+($rule4*$z4))/($rule1+$rule2+$rule3+$rule4);
}
?>
<div>
<center>
	<div class="container">
		<div class="box">
   	<center>
       <h1>HASIL PERHITUNGAN FUZZY TSUKAMOTO</h1>
	   <br />
   <table id="formq" border="1" width="50%" style="text-align: center;">
       <tr style="background-color:#ffd700;text-align: center; ">
	      <th >Aksi</th>
		  <th>Permintaan</th>
		  <th>Persediaan</th>
	   </tr>
	   <tr>
	      <td>Input</td>
		  <td><?=$inp1;?></td>
		  <td><?=$inp2;?></td>
	   </tr>
	   <tr>
	      <td>Kurva Turun</td>
		  <td><?=$pmT;?></td>
		  <td><?=$psT;?></td>
	   </tr>
	   <tr>
	      <td>Kurva Naik</td>
		  <td><?=$pmN;?></td>
		  <td><?=$psN;?></td>
	   </tr>
	   <tr>
	   	<td>Rule 1 & 2</td>
		  <td><?=$rule1;?></td>
		  <td><?=$rule2;?></td>
	   </tr>
	   <tr>
	   	<td>Rule 3 & 4</td>
	   	<td><?=$rule3;?></td>
		<td><?=$rule4;?></td>
	   </tr>
	   <tr>
	   	<td>Predikat z1 & z2</td>
	   	<td><?=$z1;?></td>
		<td><?=$z2;?></td>
	   </tr>
	   <tr>
	   	<td>Predikat z3 & z4</td>
	   	<td><?=$z3;?></td>
		<td><?=$z4;?></td>
	   </tr>
	   <tr>
	      <td>Jumlah Pengadaan</td>
		  <td colspan="2"><?php $pengadaan="";
		   echo round ($Pengadaan);?></td>
	   </tr>
</div>
	   </div>
   </table>
</center>

   
</section> 

			<!--footer-->
				<footer>
					<div class="container">
						<small>Copyright &copy; 2023 - Tsukamoto.</small>
					</div>
				</footer>
</body>
</html>