<?php
include("koneksi.php");

if (isset($_GET['idpertanyaan'])) {
	//tampilkan pertanyaan pertama
	$idsolusi = $_GET['idpertanyaan'];

	$query = "SELECT * from gejala where kode='$idsolusi'";
	// print_r($query);
	$hasil = mysqli_query($koneksi, $query);
	// print_r($hasil);
	$data = mysqli_fetch_array($hasil, MYSQLI_BOTH);

	echo "<h1>DIAGNOSA</h1>";
	echo "<br><h4>";
	echo "Apakah anda merasa " .$data['keterangan'] . "</h4><br>";
	// print_r($data);
	// print_r($data['kode_penyakity']);
	$kode2=$data['kode_penyakitY'];
	$kode3=$data['kode_penyakitN'];
	if ($kode2== "P00") {
		//bentuk pertanyaan
		echo "<form>";
		echo "<p><input type='radio' name='idpertanyaan' value='" . $data['kondisi_ya'] . "'> Ya<br></p>";
		echo "<p><input type='radio' name='idpertanyaan' value='" . $data['kondisi_tidak'] . "'> Tidak<br></p>";
		echo "<input type='submit' value='Lanjut ' >";
		echo "</form>";
	} else {
		// bentuk pertanyaan
		echo "<form>";
		echo "<p><input type='radio' name='idpenyakit' value='$kode2'>Ya<br></p>";
		echo "<p><input type='radio' name='idpenyakit' value='$kode3'>Tidak<br></p>";
		echo "<input type='submit' value='Lanjut' >";
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
	// print_r($query);
	
	$hasil = mysqli_query($koneksi, $query);
	// print_r($hasil);
	// $kodep=['penyakit'];
	// print_r($kodep);
	foreach($hasil as $row)
{
	echo "<p>Kemungkinan anda mengalami ".$row['penyakit']."</p><br>";
	echo "<p>Sakit " .$row['penyakit']. " adalah " .$row['penjelasan']. "</p><br>";
	echo "<p>Solusinya adalah " .$row['solusi']."</p><br>";
}


}
die;
