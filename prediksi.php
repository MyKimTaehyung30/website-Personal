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

<!--PREDIKSI-->
<br><br><br>
<center>
	<div class="section">
		<div class="container">
	<div class="box">
		 <h2>INPUTKAN DATA UNTUK MEMPREDIKSI JUMLAH PENGADAAN</h2><br><br>
       
	  
	   <p>Range Permintaan : 20 - 38 </p>
	   <p>Range Persediaan : 21 - 35 </p>
	   <p>Range pengadaan  : 20 - 44 </p>
	   <br>
   <form method="post" action="data.php">
   
   <table id="formq" cellpadding="4">

       <tr style="text-align: center; font-weight: bold; size: 30" >
		  <th >PERMINTAAN</th>
		  <th >PERSEDIAAN</th>
	   </tr>
	   <tr style="text-align: center; font-weight: bold; ">
		  <td><input type="text" name="inp1" id="inp2" class="input-control" placeholder="Input Permintaan" required style="background-color:#ffd700" /><br /></td>
		  <td><input type="text" name="inp2" id="inp2" class="input-control" placeholder="Input Persediaan" style="background-color:#ffd700"required/><br /></td>
	   </tr>
   </table>
   <br>
		  <input type="submit" name="aksi" id="aksi" class="btn" />
		  <input type="reset" name="clear" id="aksi" class="btn" />
		
		  <!--footer-->
				<footer>
					<div class="container"><br>
						<small>Copyright &copy; 2023 -APKL Tsukamoto.</small>
					</div>
				</footer>
			</form>
	</div>
	</div>
	</div>	
		 
   

			

</body>
</html>