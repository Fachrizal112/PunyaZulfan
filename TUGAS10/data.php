<!doctype html>
<html lang="en">
<?php include "koneksi.php"?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body style="background: url('https://cdn.shopify.com/s/files/1/1859/8979/articles/CPC-031-alternatives-to-white-background-830x488_1024x1024.png?v=1522392688') ;

background-size: cover;">
<!-- Image and text -->
<nav class="navbar navbar-light bg-transparent fixed-top">
	<div class="container-fluid">
		<a class="navbar-brand fa fa-arrow-left fa-3x" href="index.php" style="padding-top:50px" >
		</a>
	</div>
</nav>


<div class="container" style="margin-top: 50px;text-align: center"> 
	<h1 class="font-weight-bold text-white">Data Produk</h1>  
	<a href="insert.php" class="text-monospace">Tambah Data</a><br><br>  
	<table border="1" width="100%" class="table table-striped table-dark">  
		<tr>    
			<th>Nama Produk</th>    
			<th>Keterangan</th>    
			<th>Harga</th>    
			<th>Jumlah</th>    
			<th colspan="2">Aksi</th>  
		</tr>  
		<?php  
		// Include / load file koneksi.php  

		// Buat query untuk menampilkan semua data siswa  
		$sql = mysqli_query($conn,"SELECT * FROM produk"); 
		// Eksekusi querynya  
		while($data = mysqli_fetch_array($sql)){ 
		// Ambil semua data dari hasil eksekusi $sql    
		echo "<tr>";    
			echo "<td>".$data['nama_produk']."</td>";    
			echo "<td>".$data['keterangan']."</td>";    
			echo "<td>".$data['harga']."</td>";    
			echo "<td>".$data['jumlah']."</td>";    
			echo "<td><a href='edit.php?id=".$data['id']."'>Ubah</a></td>";    
			echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";    
		echo "</tr>";  }  ?>  
	</table>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


<!-- <html>
<?php
include "koneksi.php";  
?>
<head>  
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>  
	<h1>Data Siswa</h1>  
	<a href="insert.php">Tambah Data</a><br><br>  
	<table border="1" width="100%">  
		<tr>    
			<th>id</th>    
			<th>Nama Produk</th>    
			<th>Keterangan</th>    
			<th>Harga</th>    
			<th>Jumlah</th>    
			<th colspan="2">Aksi</th>  
		</tr>  
		<?php  
		// Include / load file koneksi.php  

		// Buat query untuk menampilkan semua data siswa  
		$sql = mysqli_query($conn,"SELECT * FROM produk"); 
		// Eksekusi querynya  
		while($data = mysqli_fetch_array($sql)){ 
		// Ambil semua data dari hasil eksekusi $sql    
		echo "<tr>";    
			echo "<td>".$data['id']."</td>";    
			echo "<td>".$data['nama_produk']."</td>";    
			echo "<td>".$data['keterangan']."</td>";    
			echo "<td>".$data['harga']."</td>";    
			echo "<td>".$data['jumlah']."</td>";    
			echo "<td><a href='edit.php?id=".$data['id']."'>Ubah</a></td>";    
			echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";    
		echo "</tr>";  }  ?>  
	</table>
</body>
</html> -->