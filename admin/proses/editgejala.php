<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$kode 	= $_GET['kode'];
$keterangan  = $_GET['keterangan'];
$kondisi_ya 	= $_GET['kondisi_ya'];
$kondisi_tidak 	= $_GET['kondisi_tidak'];
$kode_penyakitY  = $_GET['kode_penyakitY'];
$kode_penyakitN 	= $_GET['kode_penyakitN'];
// query SQL untuk insert data
$query="UPDATE gejala SET keterangan='$keterangan',kondisi_ya='$kondisi_ya',kondisi_tidak='$kondisi_tidak',kode_penyakitY='$kode_penyakitY',kode_penyakitN='$kode_penyakitN' where kode='$kode'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../gejala.php?pesan=update");
?>