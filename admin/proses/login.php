<?php
session_start();
require_once("../koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM pengurus WHERE username = '$username' AND sandi = '$sandi'";
$query = $koneksi->query($sql);
$hasil = $query->fetch_assoc();
if ($query->num_rows == 0) {
  echo "<div align='center'>Username Belum Terdaftar! <a href='../login.php'>Back</a></div>";
} else {
  if ($pass <> $hasil['password']) {
    echo "<div align='center'>Password salah! <a href='../login.php'>Back</a></div>";
  } else {
    $_SESSION['username'] = $hasil['username'];
    header("location:../index.php");
  }
}
?>
