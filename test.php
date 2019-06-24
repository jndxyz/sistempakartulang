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
                                    <form method="get" action="proses/solving.php">
                                    <div>
                                        <input type="checkbox" name="check_list[]" value="G01">Sakit pada bagian kaki dan tungkai<br>
                                        <input type="checkbox" name="check_list[]" value="G02">Kelemahan otot dan spasme otot<br>
                                        <input type="checkbox" name="check_list[]" value="G03">Rasa sakit menjalar<br>
                                        <input type="checkbox" name="check_list[]" value="G04">Kematian rasa poada kaki, kesemutan, perasaan tidak nyaman sepertiu rasa perih dan terbakar<br>
                                        <input type="checkbox" name="check_list[]" value="G05">Rasa sakit tidak menjalar<br>
                                        <input type="checkbox" name="check_list[]" value="G06">Sakit kepala ditempat cervical<br>
                                        <input type="checkbox" name="check_list[]" value="G07">Sakit mata dibelkang telinga<br>
                                        <input type="checkbox" name="check_list[]" value="G08">Penglihatan buram<br>
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