<?php
//include 'koneksi.php';
//$hasil = mysqli_query($con, "SELECT * FROM `barang`");
// if ($hasil->num_rows>0){
//     while ($row = $hasil->fetch_assoc()) {
//         echo "Nama Barang: ". $row["nama_barang"]."". "<br>".
//         "Jumlah Barang: ". $row["jumlah_barang"]. "<br>";
//     }
//else {
//  echo "ga ada data";
?> 
<!-- <button><a href="lihat.php" style="text-decoration: none; color: black;">Lihat Data</a></button>
<button><a href="edit.php" style="text-decoration: none; color: black;">Edit Data</a></button>
<button><a href="hapus.php" style="text-decoration: none; color: black;">Hapus Data</a></button> -->


<?php 
include "koneksi.php";
$datas = mysqli_query($con, "SELECT * FROM `barang`");
?>
<table border="1" cellspacing="0" cellpadding="10">
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Aksi</th>
<?php foreach($datas as $data){
        ?> 
        <tr>
            <td><?= $data['nama_barang'];?></td>
            <td><?= $data['jumlah_barang'];?></td>
            <td><a href="delete.php?id=<?php echo $data['id_barang'];?>">Hapus</a>
            <a href="edit.php?id=<?php echo $data['id_barang'];?>">edit</a></td>
        </tr>
    <?php } ?>
</table>
<br><br><button><a style="text-decoration: none; color: black;" href="tambah.php">Tambah data</a></button>