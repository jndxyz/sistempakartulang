<?php
include "koneksi.php";

$query = "SELECT max(kode) as maxKode FROM gejala";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil, MYSQLI_BOTH);
$kode = $data['maxKode'];

$noUrut = (int)substr($kode, 1, 2);

$noUrut++;

$char = "G";
$kode = $char . sprintf("%02s", $noUrut);
?>