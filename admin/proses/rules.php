<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM rules");
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
                " . $row['gejala'] . "
            <td>
                <a href='proses/deleterules.php?kode=$row[kode]'> Delete </a>
            </td>
        </tr>
";
}
