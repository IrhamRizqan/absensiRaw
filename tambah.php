<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang - CRUD</title>
</head>
<body>
    <form action="proses.php" method="POST">
        Nama Barang: <input type="text" name="nama_barang"><br><br>
        Jumlah Barang: <input type="number" name="jumlah_barang" id=""><br><br>
        <input type="submit" value="Kirim"><br><br>
    </form>
    <button><a href="lihat.php" style="text-decoration: none; color: black;">Lihat Data</a></button>
</body>
</html>