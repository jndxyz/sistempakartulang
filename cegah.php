<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "design/head.php";
    ?>
    <title>Pencegahan | Sistem Pakar Penyakit Diagnosa Penyakit Tulang Belakang</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--banner-->
    <section id="services" class="banner">
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
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="section-title">
                                        <h2 class="head-title lg-line">Cara Melakukan <br>Pencegahan <br>Terhadap Penyakit <br>Tulang Belakang</h2>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="service-info">
                                        <?php
                                        include "proses/cegah.php";
                                        ?>
                                    </div>
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