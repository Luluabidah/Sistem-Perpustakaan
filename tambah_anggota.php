<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : File ini digunakan untuk menambahkan data anggota baru
========================================
*/

<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

mysqli_query($conn,"INSERT INTO anggota(nama,alamat,no_hp)
VALUES('$nama','$alamat','$no_hp')");

header("location:anggota.php");

}
?>


<link rel="stylesheet" href="style.css">


<h1>Tambah Anggota</h1>

<form method="POST">

Nama
<input type="text" name="nama">

Alamat
<input type="text" name="alamat">

No HP
<input type="text" name="no_hp">

<button name="simpan">Simpan</button>

</form>

