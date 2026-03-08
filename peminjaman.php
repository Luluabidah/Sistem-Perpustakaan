<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : File ini digunakan untuk menampilkan data peminjaman buku.
========================================
*/

<?php
include 'koneksi.php';

if(isset($_POST['pinjam'])){

$id_anggota=$_POST['anggota'];
$id_buku=$_POST['buku'];
$tanggal_pinjam=$_POST['tgl_pinjam'];
$tanggal_kembali=$_POST['tgl_kembali'];

/* cek stok buku */

$cek=mysqli_query($conn,"SELECT stok FROM buku WHERE id_buku='$id_buku'");
$data_stok=mysqli_fetch_array($cek);

if($data_stok['stok'] > 0){

/* simpan peminjaman */

mysqli_query($conn,"INSERT INTO peminjaman
(id_anggota,id_buku,tanggal_pinjam,tanggal_kembali)
VALUES
('$id_anggota','$id_buku','$tanggal_pinjam','$tanggal_kembali')");

/* kurangi stok buku */

mysqli_query($conn,"UPDATE buku 
SET stok = stok - 1 
WHERE id_buku='$id_buku'");

echo "<p>Buku berhasil dipinjam</p>";

}else{

echo "<p>Stok buku habis</p>";

}

}
?>

<h1>Peminjaman Buku</h1>

<form method="POST">

Anggota

<select name="anggota">

<?php

$a=mysqli_query($conn,"SELECT * FROM anggota");

while($row=mysqli_fetch_array($a)){

echo "<option value='$row[id_anggota]'>$row[nama]</option>";

}

?>

</select>

Buku

<select name="buku">

<?php

$b=mysqli_query($conn,"SELECT * FROM buku");

while($row=mysqli_fetch_array($b)){

echo "<option value='$row[id_buku]'>$row[judul]</option>";

}

?>

</select>

Tanggal Pinjam
<input type="date" name="tgl_pinjam">

Tanggal Kembali
<input type="date" name="tgl_kembali">

<button name="pinjam">Pinjam</button>

</form>

<h2>Data Peminjaman</h2>

<table>

<tr>
<th>Nama</th>
<th>Judul Buku</th>
<th>Tanggal Pinjam</th>
<th>Tanggal Kembali</th>
</tr>

<?php

$data=mysqli_query($conn,"
SELECT anggota.nama,buku.judul,peminjaman.tanggal_pinjam,peminjaman.tanggal_kembali
FROM peminjaman
JOIN anggota ON peminjaman.id_anggota=anggota.id_anggota
JOIN buku ON peminjaman.id_buku=buku.id_buku
");

while($d=mysqli_fetch_array($data)){
?>

<tr>

<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['judul']; ?></td>
<td><?php echo $d['tanggal_pinjam']; ?></td>
<td><?php echo $d['tanggal_kembali']; ?></td>

</tr>

<?php } ?>

</table>