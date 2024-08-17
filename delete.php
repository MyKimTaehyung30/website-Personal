<?php 
include 'db.php';

$id =$_GET['id_data'];

mysqli_query($conn, "delete from tb_data where id_data='$id'");

 header("location:prediksi.php")
 ?>