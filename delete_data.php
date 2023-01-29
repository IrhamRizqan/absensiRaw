<?php 
include 'koneksi.php';
$sql = "DELETE FROM `absenrpl` WHERE `nomer_absen`";
if (mysqli_query($conn, $sql)) {
    echo "Data terhapus";
    header("location: masukan_data.php");
} else {
    echo "Data tidak terhapus";
    ?><button><a style="text-decoration: none; color: black; " href="masukan_data.php">Kembali</a></button>
    <?php
}
?>