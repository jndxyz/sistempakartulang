<?php
include "koneksi.php";
?>
<html>

<head>
    <?php
    include "design/head.php";
    ?>
    <title>
        Perbarui Data Gejala | Sistemm Pakar Diagnosa Penyakit Tulang Belakang
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
                    $info  = mysqli_query($koneksi, "SELECT * FROM gejala where kode='$kode'");
                    $row    = mysqli_fetch_array($info);
                    ?>
                    <h2>Edit Info</h2>
                    <form method="pogetst" action="proses/editgejala.php" role="form">
                        <label for="inputdefault">
                            <h3>Kode</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="kode" type="text" value="<?php echo $row['kode']; ?>" readonly>
                        </div>
                        <label for="inputdefault">
                            <h3>Nama Gejala</h3>
                        </label>
                        <div style="padding-bottom:20px">
                            <input class="form-control" name="keterangan" type="text" value="<?php echo $row['keterangan']; ?>">
                        </div>
                        <label for="inputdefault">
                            <h3>Kondisi</h3>
                        </label>
                        <br>
                        <label for="inputdefault">Jika Jawaban Ya</label>
                        <div>
                            <input class="form-control" name="kondisi_ya" type="text" value="<?php echo $row['kondisi_ya']; ?>">
                        </div>
                        <br>
                        <label for="inputdefault">Jika Jawaban Tidak</label>
                        <div>
                            <input class="form-control" name="kondisi_tidak" type="text" value="<?php echo $row['kondisi_tidak']; ?>">
                        </div>
                        <label for="inputdefault">Kode Penyakit Ya</label>
                        <div>
                            <input class="form-control" name="kode_penyakitY" type="text" value="<?php echo $row['kode_penyakitY']; ?>">
                        </div>
                        <label for="inputdefault">Kode Penyakit Tidak</label>
                        <div style="padding-bottom:50px">
                            <input class="form-control" name="kode_penyakitN" type="text" value="<?php echo $row['kode_penyakitN']; ?>">
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