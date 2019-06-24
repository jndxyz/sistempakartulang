<?php
include "../koneksi.php";

$kode = $_POST ['kode'];
// $gejala = $_POST ['gejala'];
$get_gejala = $_POST ['gejala'];
$penyakit = $_POST ['penyakit'];

// echo $get_gejala;
$gejala = implode(",", $get_gejala);


mysqli_query($koneksi, "INSERT INTO rules VALUES ('$kode','$gejala','$penyakit')");
// echo $gejala;

header("location:../inputrules.php?pesan=input");  
?>