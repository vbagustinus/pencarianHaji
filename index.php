<!DOCTYPE HTML>
<html>
	<head>
		<title>Keberangkatan Haji</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	
	<body>
	
		<!-- Header -->
			<header id="header">
			<!--<canvas id="myCanvas"></canvas>-->
				<div class="inner">	
						<nav id="nav">
						<a href="#">Agustinus | 130103001</a>
						<a href="#">Muhammad Arifudin | 140103041</a>
						<a href="#">Bruri Suciarto | 140103012</a>
						<a href="#">Wisnu Prasetyo | 140103067</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
		<!-- Banner -->
			<section id="banner">
			
				<h1>Perkiraan Keberangkatan Haji</h1>
				<p>Temukan jadwal keberangkatan haji anda disini dengan memasukkan nomor porsi</p>
				<p>contoh : 100137466, 100137467, 100137468, 100137469</p>
				<p>
				<form method="post" action="" >
						<div class="uniform" >
							<div class="12u$ 12u(small)">
								<input type="text" name="porsi" id="text" value="" placeholder="Masukkan nomor Porsi" /><br/>
								
								<input type="submit" name ="submit" value="Cek" class="button special icon fa-search" />
								
							</div>
						</div>
				</form></p>
			
	
		<!-- Two -->
			<section id="one" class="wrapper">
				<div class="inner">
				<div class="display">
				  <?php
				if (isset($_POST["submit"])) {
					$_POST["porsi"] = str_replace(' ',' ', $_POST["porsi"]); 
				   $url = "https://sites.google.com/macros/exec?service=AKfycbyfd-1n79k0TDYFbcI4XI28zDdiK8aeCcWzLtNH97jfr3xoPpg&nomor=".$_POST["porsi"]."";
				   $content = file_get_contents($url);
					$json = json_decode($content, TRUE);
					$nomor = $json['data']['nomor_porsi'];
					if (!(isset($nomor))){
						echo "<h2>Nomor porsi yang anda masukkan salah, silahkan ulangi</h2>";
					}
					else{
					$haji = array($json['data']);

				?>

				</div>
					<header>
						<h2>Nomor Porsi</h2>
						<h2><?php echo $nomor ?></h2>
					</header>
					<div class="flex flex-3">
						<article>
							<div class="box person">
							<h3>Nama</h3>
							<p><?php echo $haji[0]['nama'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Kabupaten/Kota</h3>
							<p><?php echo $haji[0]['kab_kot'] ?></p>
							</div>
						</article>
						<article>
							<div class="box person">
							<h3>Provinsi</h3>
							<p><?php echo $haji[0]['provinsi'] ?></p>
							</div>
						</article>
					</div>
					<div class="flex flex-3">
						<article>
						<div class="box person">
							<h3>Kuota</h3>
							<p><?php echo $haji[0]['kuota'] ?></p>
						</div>
						</article>
						<article>
							<div class="box person">
							<h3>Posisi</h3>
							<p><?php echo $haji[0]['posisi_porsi'] ?></p>
						</div>
						</article>
						<article>
							<div class="box person">
							<h3>Hijriah</h3>
							<p><?php echo $haji[0]['perkiraan_berangkat']['hijriah'] ?></p>
							<h3>Masehi</h3>
							<p><?php echo $haji[0]['perkiraan_berangkat']['masehi'] ?></p>
						</div>
						</article>
					</div>
				</div>
			</section>
			</section>
<?php
	}
}
?>
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; STMIK Duta Bangsa.
						</div>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		

	</body>
</html>