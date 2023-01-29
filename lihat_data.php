<?php 
include "koneksi.php";
$datas = mysqli_query($conn, "SELECT * FROM `absenrpl`");
?>
<table border="1" cellspacing="0" cellpadding="10">
        <th>
            Nomor Absen
        </th>
        <th>
            Nama Absen
        </th>
        <th>
            Jumlah Absen
        </th>
        <th>
            Aksi
        </th>
<?php
foreach($datas as $data){
?>
    <tr>
        <td><?= $data['nomer_absen'];?></td>
        <td><?= $data['nama_absen'];?></td>
        <td><?= $data['jumlah_absen'];?></td>
        <td><a href="delete_data.php?id=<?php echo $data['nomer_absen'];?>">Hapus</a></td>
    </tr>
</table>
<button><a style="text-decoration: none; color: black; " href="masukan_data.php">Tambah data</a></button>
    <?php
} ?>