<?php
include '../koneksi.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from cegah where id='$id'";
// print_r($query);
$hasil = mysqli_query($koneksi, $query);
// print_r($hasil);
// mengalihkan ke halaman index.php
header("location:../cegah.php?pesan=hapus");
?>