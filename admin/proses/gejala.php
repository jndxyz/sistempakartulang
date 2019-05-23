<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM gejala");
foreach ($data as $row) {
    echo "
        <tr>
            <td>
                " . $row['kode'] . "
            </td>
            <td>
                " . $row['keterangan'] . "
            </td>
            <td>
                " . $row['kondisi_ya'] . "
            </td>
            <td>
                " . $row['kondisi_tidak'] . "
            </td>
            <td>
                " . $row['kode_penyakitY'] . "
            </td>
            <td>
                " . $row['kode_penyakitN'] . "
            </td>
            <td>
                <a href='editgejala.php?kode=$row[kode]'> Edit </a>
            </td>
            <td>
                <a href='proses/deletegejala.php?kode=$row[kode]'> Delete </a>
            </td>
        </tr>
";
}
?>
