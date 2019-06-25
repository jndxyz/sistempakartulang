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
            </div>s

            <div class="bg-cegah">
                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <?php
                            include "koneksi.php";
                            $gejala = $_GET['check_list'];
                            $get_gejala = implode(",", $gejala);
                            $data = mysqli_query($koneksi, "SELECT * from rules");
                            if (mysqli_num_rows($data) > 0) {
                                while ($row = mysqli_fetch_assoc($data)) {
                                    if ($get_gejala == $row['gejala']) {
                                        echo "<h4>Berdasarkan hasil diagnosa dari gejala yang anda alami<br>";
                                        echo "kemungkinan anda menderita penyakit <br>";
                                        echo $row['penyakit'];
                                    }
                                }
                            }

                            // var_dump($query);
                            // $row['gejala'];
                            // echo $row['gejala'];
                            // if ($gejala == 'gejala'){
                            //     echo 'penyakit';
                            // }else{
                            // }
                            ?>
                            <br><a href="diagnosa.php">Kembali</a>
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