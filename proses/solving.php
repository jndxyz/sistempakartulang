<?php
include "../koneksi.php";

$gejala = $_GET ['check_list'];
$tanda_gejala = ["G01","G02","G03"];

// $data = mysqli_query($koneksi, "SELECT * FROM penyakit");

// var_dump($gejala);
// if (in_array(array("G01", "G02", "G03"), $gejala)) {
//     echo "Sakti";
// }
// var_dump(in_array(array("G01","G02","G03"), $gejala)); 

if ($gejala == $tanda_gejala){
    echo "Sakit";
}

// if (in_array("mac", $os)) {
//     echo "Got mac";
// }

// switch ($check_list) {
//     case "G01,G02,G03":
//         echo "Sakit Aja";
//         break;
//     case "G04,G05,G06":
//         echo "Sakit Banget";
//         break;
//     default:
//         # code...
//         break;
// }

// if ($check_list=="G01, G02, G03") {
//     echo "Sakit";
// } else {
//     echo "Tidak";
// }

?>