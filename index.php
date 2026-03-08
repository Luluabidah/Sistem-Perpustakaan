<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : Halaman utama (dashboard)
========================================
*/

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Perpustakaan</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="layout">

<div class="sidebar">

<h2>📚 Perpustakaan</h2>

<a href="index.php">Home</a>
<a href="index.php?page=anggota">Data Anggota</a>
<a href="index.php?page=buku">Data Buku</a>
<a href="index.php?page=peminjaman">Peminjaman Buku</a>

</div>


<div class="main">

<?php

if($page=="anggota"){
include "anggota.php";
}

elseif($page=="tambah_anggota"){
include "tambah_anggota.php";
}

elseif($page=="buku"){
include "buku.php";
}

elseif($page=="peminjaman"){
include "peminjaman.php";
}

else{
echo "<h1>Selamat Datang di Sistem Perpustakaan</h1>";
}

?>

</div>

</div>

</body>
</html>