<?php
include "koneksi.php";
$id = $_POST['id_barang'];
$namaBarang = $_POST['nama_barang'];
$namaJumlah = $_POST['jumlah_barang'];

mysqli_query($con, "UPDATE barang SET nama_barang = '$namaBarang', jumlah_barang = '$namaJumlah' WHERE id_barang='$id'");
header("location: lihat.php?pesan=update");
?>