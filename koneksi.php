<?php
/*
========================================
SISTEM PERPUSTAKAAN

Pembuat     : Lulu Abidah
Assessor    : Ocim, S.Kom
Tanggal     : 08 Maret 2026
Deskripsi   : File ini digunakan untuk menghubungkan sistem dengan database MySQL
========================================
*/


<?php

$host = "sql206.byetcluster.com";
$user = "if0_41326660";
$password = "Eunwomybf30";
$database = "if0_41326660_db_perpustakaan";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>