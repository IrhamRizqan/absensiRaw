<?php 
include 'koneksi.php';

echo $nomorAbsen = $_POST['nomorAbsen'];
echo $namaAbsen = $_POST['namaAbsen'];

$input = mysqli_query($conn, "INSERT INTO `absenrpl`(`nomer_absen`, `nama_absen`) VALUES ('$nomorAbsen','$namaAbsen')");

header("location: masukan_data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
</head>
<body>
    
</body>
</html>