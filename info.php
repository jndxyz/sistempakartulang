<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "design/head.php";
    ?>
    <title>Informasi Terkini | Sistem Pakar Penyakit Diagnosa Penyakit Tulang Belakang</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--banner-->
    <section id="about" class="banner">
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
                                <div class="col-md-3 col-sm-4 col-xs-12">
                                    <div class="section-title">
                                        <h2 class="head-title lg-line">Informasi <br>Terkini</h2>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-8 col-xs-12">
                                    <div style="visibility: visible;" class="col-sm-9 more-features-box">
                                        <div class="more-features-box-text">
                                            <div class="more-features-box-text-description">
                                                <?php
                                                include "proses/info.php"
                                                ?>
                                            </div>
                                        </div>
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