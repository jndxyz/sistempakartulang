<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$kode 	= $_GET['kode'];
$gejala  = $_GET['gejala'];
$penyakit 	= $_GET['penyakit'];
// query SQL untuk insert data
$query="UPDATE rules SET gejala ='$gejala',penyakit='$penyakit'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../rules.php?pesan=update");
?>