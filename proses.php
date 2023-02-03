<?php  
include 'koneksi.php';
$namaBarang = $_POST['nama_barang'];
$jumlahBarang = $_POST['jumlah_barang'];

$query = mysqli_query($con, "INSERT INTO `barang`(`nama_barang`, `jumlah_barang`) VALUES ('$namaBarang','$jumlahBarang')");

header("location: tambah.php");
?>