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
                    include "proses/kodepenyakit.php"
                    ?>
                    <form action="proses/inputpenyakit.php" method="post" role="form">
                        <label for="inputdefault">
                            <h3>Kode Penyakit</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="kode" type="text" value="<?php echo $kode; ?>" readonly>
                        </div>
                        <label for="inputdefault">
                            <h3>Penyakit</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="penyakit" type="text" value="">
                        </div>
                        <label for="inputdefault">
                            <h3>Penjelasan</h3>
                        </label>
                        <div style="padding-bottom:20px">
                        <textarea class="form-control" name="penjelasan"></textarea>
                        </div>
                        <label for="inputdefault">
                            <h3>Solusi</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="solusi" type="text" value="">
                        </div>
                        <div style="padding-bottom:50px">
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