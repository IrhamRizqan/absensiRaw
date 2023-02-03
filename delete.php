<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM `barang` WHERE `id_barang` = '$id'");
if ($sql == TRUE) {
    echo "Data terhapus";
    header("location: lihat.php");
} else {
    echo "Data tidak terhapus";
    ?><button><a style="text-decoration: none; color: black; " href="tambah.php">Kembali</a></button>
    <?php
}
?>