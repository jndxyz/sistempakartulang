<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM cegah");
foreach ($data as $row) {
    echo "
        <table>
            <tr>
                <td width=1000px>
                    <h3>" . $row['judul'] . "</h3>	
                </td>
            </tr>
            <tr>
                <td>
                " . $row['isi'] . "
                </td>
            </tr>
        </table>
        <hr>
";
};
?>