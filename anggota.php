<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : File ini digunakan untuk menampilkan data anggota perpustakaan.
========================================
*/


?>

<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];

    mysqli_query($conn,"INSERT INTO anggota(nama,alamat,no_hp)
    VALUES('$nama','$alamat','$no_hp')");
}
?>

<title>Data Anggota</title>
<link rel="stylesheet" href="style.css">

<h1>Data Anggota</h1>

<form method="POST">

Nama
<input type="text" name="nama">

Alamat
<input type="text" name="alamat">

No HP
<input type="text" name="no_hp">

<button name="simpan">Tambah Anggota</button>

</form>

<table>

<tr>
<th>ID</th>
<th>Nama</th>
<th>Alamat</th>
<th>No HP</th>
</tr>

<?php
$data=mysqli_query($conn,"SELECT * FROM anggota");

while($d=mysqli_fetch_array($data)){
?>

<tr>
<td><?php echo $d['id_anggota']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['alamat']; ?></td>
<td><?php echo $d['no_hp']; ?></td>
</tr>

<?php } ?>

</table>

