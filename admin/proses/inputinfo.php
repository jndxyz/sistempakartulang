<?php
include "../koneksi.php";

$id = $_POST['id'];
$judul = $_POST ['judul'];
$isi = $_POST ['isi'];

mysqli_query($koneksi, "INSERT INTO info VALUES ('$id','$judul','$isi')");

header("location:../info.php?pesan=input");  
?>