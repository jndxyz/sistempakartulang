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
                        <h4>  Kode Penyakit 
                    </td>
                    <td width="200px">
                        <h4>  Nama Penyakit
                    </td>
                    <td width="400px">
                        <h4>  Penjelasan
                    </td>
                    <td width="300px">
                        <h4>  Solusi
                    </td>
                    <td colspan="2" width="200px">
                        <h4>  Action
                    </td>
                </tr>
                <?php
                    include "proses/penyakit.php"
                ?>
            </table>
    	</section>
    	<?php
    	include "design/foot.php";
    	?>
    </body>
</html>