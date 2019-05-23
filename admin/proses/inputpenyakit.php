<?php
include "../koneksi.php";

$kode = $_POST ['kode'];
$penyakit = $_POST ['penyakit'];
$penjelasan = $_POST ['penjelasan'];
$solusi = $_POST ['solusi'];

mysqli_query($koneksi, "INSERT INTO penyakit VALUES ('$kode','$penyakit','$penjelasan','$solusi')");

header("location:../penyakit.php?pesan=input");  
?>