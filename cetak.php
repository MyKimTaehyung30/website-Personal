<?php 
 session_start();
 if($_SESSION['status_login'] != true){
 	echo '<script>window.location="login.php"</script>';
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h2>LAPORAN HASIL PREDIKSI PENGADAAN PADI</h2>
		<h2>HULLER MAS</h2>
	</center>
<?php 
include 'db.php'
 ?>
 <center>
 <table border="1" style="width: 50%">
 	<tr>
 				<th width="1%" >No</th>
 				<th>Tanggal</th>
		 		<th >Permintaan</th>
				<th >Persediaan </th> 
				<th >Pengadaan </th>
 	</tr>
 	<?php 
$no=1;
$sql =mysqli_query($conn,"select * from tb_data");
while($data =mysqli_fetch_array($sql)){
?>
<tr>
							<td align="center"><?php echo $no++; ?></td>
							<td align="center"><?php echo $data['tanggal'];?></td>
							<td align="center"><?php echo $data['permintaan'];?></td>
							<td align="center"><?php echo $data['persediaan'];?></td>
							<td align="center"><?php echo $data['pengadaan'];?></td>
</tr>

</center>
<?php	
}
 	 ?>

 </table>
 <script>
 	
 	window.print()
 </script>
</body>
</html>