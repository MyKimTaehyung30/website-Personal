<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewerport" content="width=device-width, initial-scale=1">
	<title>Login | TSUKAMOTO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body id="bg-login" background="padi.jpg">
	<div class="box-login" >
		<h2>APLIKASI PREDIKSI PENGADAAN PADI HULLER MAS</h2>
		<H3>Silahkan Login</H3>
		
		<form action="" method="POST" >
			<input type="text" name="user" placeholder="username" class="input-control" required>
			<input type="password" name="pass" placeholder="password" class="input-control" required>
			<input type="submit" name="submit" value="Login" class="btn">
			<input type="reset" name="reset" value="Reset" class="btn">
		</form>
			<?php 
				if(isset($_POST['submit'])){
					session_start();
					include 'db.php';

					$user = $_POST['user'];
					$pass = $_POST['pass'];
		$cek =mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password ='".MD5($pass)."'");
		if( mysqli_num_rows($cek) > 0){
			$d =mysqli_fetch_object($cek);
			$_SESSION['status_login'] =true;
			$_SESSION['a_global'] = $d;
			$_SESSION['id'] = $d->id_admin;
			echo '<script>window.location="dashboard.php"</script>';
			}else{
				echo '<script>alert("Username atau password Anda salah!")</script>';
			}
					
				}
			 ?>
	</div>

</body>
</html>