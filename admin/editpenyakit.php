<?php
include "koneksi.php";
?>
<html>

<head>
    <?php
    include "design/head.php";
    ?>
    <title>
        Perbarui Info | Sistemm Pakar Diagnosa Penyakit Tulang Belakang
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
                    $kode     = $_GET['kode'];
                    $info  = mysqli_query($koneksi, "select * from penyakit where kode='$kode'");
                    $row    = mysqli_fetch_array($info);
                    ?>
                    <h2>Edit Data Penyakit</h2>
                    <form method="pogetst" action="proses/editpenyakit.php" role="form">
                        <label for="inputdefault">
                            <h3>Kode Penyakit</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="kode" type="text" value="<?php echo $row['kode']; ?>" readonly>
                        </div>
                        <label for="inputdefault">
                            <h3>Penyakit</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="penyakit" type="text" value="<?php echo $row['penyakit']; ?>">
                        </div>
                        <label for="inputdefault">
                            <h3>Penjelasan</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <textarea class="form-control" name="penjelasan"><?php echo $row['penjelasan']; ?></textarea>
                        </div>
                        <label for="inputdefault">
                            <h3>Solusi</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="solusi" type="text" value="<?php echo $row['solusi']; ?>">
                        </div>
                        <div>
                            <center>
                                <button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        </div>



                    </form>
        </section>
        <?php
        include "design/foot.php";
        ?>
</body>

</html>