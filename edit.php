<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h3>Edit Data</h3>
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $editQuery = mysqli_query($con, "SELECT * FROM barang WHERE id_barang ='$id'");
        $nomor = 1;
        while ($data = mysqli_fetch_array($editQuery)) {
        ?> <form action="update.php" method="POST">
                <input type="hidden" name="id_barang" value="<?php echo $data['id_barang'];?>">
                Nama Barang: <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']?>"><br><br>
                Jumlah Barang: <input type="number" name="jumlah_barang" value="<?php echo $data['jumlah_barang']?>"><br><br>
                <input type="submit" value="Kirim"><br><br>
            </form>
        <?php 
        }
        ?>
</body>
</html>