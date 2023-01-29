<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengisi Data</title>
</head>
<body>
    <table border="0">
    <form action="proses_data.php" method="POST">
        <tr>
            <td>Nomer Absen</td>
            <td><input type="number" name="nomorAbsen"><br></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="namaAbsen"><br><br></td>
        </tr>

        <tr>
            <td><input type="submit" value="Kirim"></td>
            <td><button><a href="lihat_data.php" style="text-decoration: none; color: black;">Lihat Data</a></button></td>
        </tr>


    </form>
    </table>
</body>
</html>