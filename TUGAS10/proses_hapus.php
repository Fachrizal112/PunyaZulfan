<?php
include "koneksi.php";

$id =  $_GET['id'];

$sql = mysqli_query($conn,"DELETE FROM `produk` WHERE id='$id'");

if($sql){
	header('location:data.php');
}else{
	echo "<pre>";
	print_r(mysqli_error($conn));
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus data ke database.";
}


?>