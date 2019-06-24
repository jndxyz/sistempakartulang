<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "design/head.php";
    ?>
    <title>Medilab Free Bootstrap HTML5 Template</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--banner-->
    <section id="contact" class="banner">
        <div class="bg-color">
            <div>
                <?php
                include "design/header.php"
                ?>
            </div>

            <div class="bg-cegah">
                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <section class="container">
                                <div class="col-md-12 col-sm-12">
                                    <div class="service-info">
                                        <h2 class="head-title lg-line">Diagnosa</h2>
                                    </div>
                                    <p>
                                        <form method="get" action="hasil.php">
                                            <div>
                                                <?php
                                                include "koneksi.php";
                                                $query = "SELECT * from gejala";
                                                $hasil = mysqli_query($koneksi, $query);
                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    echo "<input type='checkbox' name='check_list[]' value='$data[kode]'>  $data[keterangan]<br>";
                                                }
                                                ?>
                                            </div>
                                            <div>
                                                <br><input type="submit" name="submit" value="Diagnosa">
                                            </div>
                                        </form>
                                    </p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->
    <?php
    include "design/foot.php";
    ?>
</body>

</html>