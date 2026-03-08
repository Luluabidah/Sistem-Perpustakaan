<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : File ini digunakan untuk menampilkan data buku yang tersedia di perpustakaan.
========================================
*/

<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $judul=$_POST['judul'];
    $penulis=$_POST['penulis'];
    $tahun=$_POST['tahun'];
    $stok=$_POST['stok'];

    mysqli_query($conn,"INSERT INTO buku(judul,penulis,tahun_terbit,stok)
    VALUES('$judul','$penulis','$tahun','$stok')");
}
?>


<title>Data Buku</title>
<link rel="stylesheet" href="style.css">


<h1>Data Buku</h1>

<form method="POST">

Judul Buku
<input type="text" name="judul">

Penulis
<input type="text" name="penulis">

Tahun Terbit
<input type="number" name="tahun">

Stok
<input type="number" name="stok">

<button name="simpan">Tambah Buku</button>

</form>

<table>

<tr>
<th>ID</th>
<th>Judul</th>
<th>Penulis</th>
<th>Tahun</th>
<th>Stok</th>
</tr>

<?php
$data=mysqli_query($conn,"SELECT * FROM buku");

while($d=mysqli_fetch_array($data)){
?>

<tr>
<td><?php echo $d['id_buku']; ?></td>
<td><?php echo $d['judul']; ?></td>
<td><?php echo $d['penulis']; ?></td>
<td><?php echo $d['tahun_terbit']; ?></td>
<td><?php echo $d['stok']; ?></td>
</tr>

<?php } ?>

</table>

