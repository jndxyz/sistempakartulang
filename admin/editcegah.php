<?php
include "koneksi.php";
?>
<html>

<head>
    <?php
    include "design/head.php";
    ?>
    <title>
        Perbarui Data Penncegahan | Sistemm Pakar Diagnosa Penyakit Tulang Belakang
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
                    $id     = $_GET['id'];
                    $info  = mysqli_query($koneksi, "select * from cegah where id='$id'");
                    $row    = mysqli_fetch_array($info);
                    ?>
                    <h2>Edit Info</h2>
                    <form method="pogetst" action="proses/editcegah.php" role="form">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
						<div style="padding-bottom:20px">
							<input class="form-control" name="judul" type="text" value="<?php echo $row['judul'] ?>">
						</div>
						<label for="inputdefault">
							<h3>Isi</h3>
						</label>
						<div style="padding-bottom:20px">
							<textarea class="form-control" name="isi"><?php echo $row['isi'] ?>
								</textarea>
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