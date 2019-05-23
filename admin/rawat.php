<?php
	include "koneksi.php";
?>
<html>
	<head>
  	<?php
    	include "design/head.php";
  	?>
  	<title>
			Perawatan | Sistemm Pakar Diagnosa Penyakit Tulang Belakang
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
					<h2>Tata Cara Merawat dan Memelihara Tulang Belakang</h2>
					<?php
						include "proses/rawat.php";
					?>
    	</section>
    	<?php
    	include "design/foot.php";
    	?>
    </body>
</html>