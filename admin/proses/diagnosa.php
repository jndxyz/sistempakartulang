<?php
include("../koneksi.php");

if (isset($_GET['idpertanyaan'])) {
	//tampilkan pertanyaan pertama
	$idsolusi = $_GET['idpertanyaan'];

	$query = "SELECT * from gejala where kode='$idsolusi'";
	// print_r($query);
	$hasil = mysqli_query($koneksi, $query);
	// print_r($hasil);
	$data = mysqli_fetch_array($hasil, MYSQLI_BOTH);

	echo "<h1>DIAGNOSA</h1>";
	echo $data['keterangan'] . "<br>";

	// print_r($data['kode_penyakity']);
	$kode2=$data['kode_penyakitY'];
	$kode3=$data['kode_penyakitN'];
	if ($kode2== "P00") {
		//bentuk pertanyaan
		echo "<form>";
		echo "<input type='radio' name='idpertanyaan' value='" . $data['kondisi_ya'] . "'>Ya2<br>";
		echo "<input type='radio' name='idpertanyaan' value='" . $data['kondisi_tidak'] . "'>Tidak2<br>";
		echo "<input type='submit' value='Lanjut >> ' >";
		echo "</form>";
	} else {
		// bentuk pertanyaan
		echo "<form>";
		echo "<input type='radio' name='idpenyakit' value='$kode2'>Ya3<br>";
		echo "<input type='radio' name='idpenyakit' value='$kode3'>Tidak3<br>";
		echo "<input type='submit' value='Lanjut >> ' >";
		echo "</form>";

	}
} else if(isset($_GET['idpenyakit'])){
	// echo "berhasil";
	
	// $query = "SELECT * from penyakit where kode='$kode2'";
	// print_r($query);
	// $hasil = mysqli_query($koneksi, $query);
	// print_r($hasil);
	// $data = mysqli_fetch_array($hasil, MYSQLI_BOTH);
	// print_r($data);
	// echo $data['penyakit'] . "<br>";

	$kodep = $_GET['idpenyakit'];

	$query = "SELECT * from penyakit where kode='$kodep'";
	print_r($query);
	
	$hasil = mysqli_query($koneksi, $query);
	print_r($hasil);
	// $kodep=['penyakit'];
	// print_r($kodep);
	foreach($hasil as $row)
{
	echo "Id is ".$row['penyakit']."<br>";
}


}
die;
