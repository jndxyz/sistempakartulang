<?php
include "koneksi.php";
?>
<html>

<head>
    <?php
    include "design/head.php";
    ?>
    <title>
        Tambah Gejala | Sistemm Pakar Diagnosa Penyakit Tulang Belakang
    </title>
</head>

<body>
    <?php
    include "design/header.php";
    include "design/sidebar.php";
    ?>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    include "message.php";
                    ?>
                    <?php
                    include "proses/koderules.php"
                    ?>
                    <form action="proses/inputrules.php" method="post" role="form">
                        <label for="inputdefault">
                            <h3>Kode Rules</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="kode" type="text" value="<?php echo $kode; ?>" readonly>
                        </div>
                        <label for="inputdefault">
                            <h3>Penyakit</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <select name="penyakit" title="penyakit">
                                <?php
                                include "koneksi.php";
                                $query = "SELECT * from penyakit";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<option value='$data[penyakit]'>$data[penyakit]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <label for="inputdefault">
                            <h3>Gejala</h3>
                        </label>
                        <div style="padding-bottom:50px">
                                <?php
                                include "koneksi.php";
                                $query = "SELECT * from gejala";
                                $hasil = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<input type='checkbox' name='gejala[]' value=$data[kode]>$data[kode] $data[keterangan]<br>";
                                }
                                ?>
                        </div>
                        <div>
                            <center>
                                <button type="submit" value="">SIMPAN</button>
                            </center>
                        </div>
                    </form>
        </section>
        <?php
        include "design/foot.php";
        ?>
</body>

</html>