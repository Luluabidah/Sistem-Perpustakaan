<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : File ini digunakan untuk menambahkan data buku baru
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

header("location:index.php?page=buku");

}
?>

<h1>Tambah Buku</h1>

<form method="POST">

Judul Buku
<input type="text" name="judul">

Penulis
<input type="text" name="penulis">

Tahun Terbit
<input type="text" name="tahun">

Stok
<input type="text" name="stok">

<button name="simpan">Simpan</button>

</form>