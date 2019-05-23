<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$kode 	= $_GET['kode'];
$penyakit  = $_GET['penyakit'];
$penjelasan 	= $_GET['penjelasan'];
$solusi 	= $_GET['solusi'];
// query SQL untuk insert data
$query="UPDATE penyakit SET penyakit='$penyakit',penjelasan='$penjelasan',solusi='$solusi' where kode='$kode'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../penyakit.php?pesan=update");
?>