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
                                        <?php
                                        include "proses/diagnosa.php";
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