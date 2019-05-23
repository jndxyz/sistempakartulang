<?php
include "../koneksi.php";

$kode = $_POST ['kode'];
$keterangan = $_POST ['keterangan'];
$kondisi_ya = $_POST ['kondisi_ya'];
$kondisi_tidak = $_POST ['kondisi_tidak'];
$kode_penyakitY = $_POST ['kode_penyakitY'];
$kode_penyakitN = $_POST ['kode_penyakitN'];

mysqli_query($koneksi, "INSERT INTO gejala VALUES ('$kode','$keterangan','$kondisi_ya','$kondisi_tidak','$kode_penyakitY','$kode_penyakitN')");

header("location:../gejala.php?pesan=input");  
?>