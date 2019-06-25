<?php
include "../koneksi.php";

$kode = $_POST ['kode'];
// $gejala = $_POST ['gejala'];
$get_gejala = $_POST ['gejala'];
$penyakit = $_POST ['penyakit'];

// echo $get_gejala;
$gejala = implode(",", $get_gejala);


$data = mysqli_query($koneksi, "INSERT INTO rules VALUES ('$kode','$gejala','$penyakit')");
// var_dump($data);

header("location:../inputrules.php?pesan=input");  
?>