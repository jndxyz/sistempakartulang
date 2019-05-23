<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$id 	= $_GET['id'];
$judul  = $_GET['judul'];
$isi 	= $_GET['isi'];
// query SQL untuk insert data
$query="UPDATE info SET judul='$judul',isi='$isi' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../info.php?pesan=update");
?>