<?php
include '../koneksi.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from rawat where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../rawat.php?pesan=hapus");
?>