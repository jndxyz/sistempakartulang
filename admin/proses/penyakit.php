<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM penyakit");
foreach ($data as $row) {
    echo "
        <tr style='margin-bottom:20px;'>
            <td>
                " . $row['kode'] . "
            </td>
            <td>
                " . $row['penyakit'] . "
            </td>
            <td>
                <p style>" . $row['penjelasan'] . "
            </td>
            <td>
                " . $row['solusi'] . "
            <td>
                <a href='editpenyakit.php?kode=$row[kode]'> Edit </a>
            </td>
            <td>
                <a href='proses/deletepenyakit.php?kode=$row[kode]'> Delete </a>
            </td>
        </tr>
";
}
?>
