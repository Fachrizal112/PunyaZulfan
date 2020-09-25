<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Proses simpan ke Database
$sql = mysqli_query($conn,"INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES('$nama_produk','$keterangan','$harga','$jumlah')");

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: data.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
	echo "<pre>";
	print_r(mysqli_error($conn));
	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>