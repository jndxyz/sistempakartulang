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
            <table>
                <tr>
                    <td width="100px">
                        <h4>  Kode Gejala
                    </td>
                    <td width="400px">
                        <h4>  Nama Gejala
                    </td>
                    <td width="100px">
                        <h4>  Kondisi Jika Ya
                    </td>
                    <td width="100px">
                        <h4>  Kondisi Jika Tidak
                    </td>
                    <td width="150px">
                        <h4>  Kode Penyakit Ya
                    </td>
                    <td width="150px">
                        <h4>  Kode Penyakit Tidak
                    </td>
                    <td colspan="2" width="200px">
                        <h4>  Action
                    </td>
                </tr>
                <?php
                    include "proses/gejala.php"
                ?>
            </table>
    	</section>
    	<?php
    	include "design/foot.php";
    	?>
    </body>
</html>