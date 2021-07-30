<!doctype html>
<html>

<head> 
	<title>Pendaftaran Sidang</title>
	<link rel="stylesheet" href="..\phpIntro.css">
</head>

<body>
	<div class="center">
		<img src="https://ecampus.i-tech.ac.id/tech/img/logo_perguruanTinggi_18.png">
		<h2 class="centerh2">Pendaftaran Sidang Proyek</h2>
	</div>
	<div class="navbar">
		<a href="..\index.html">Beranda</a>
		<a href="Prosedur.html">Prosedur</a>
		<a class="active" href="Pendaftaran.html">Pendaftaran</a>
		<a href="Kontak.html">Kontak Kami</a>
	</div>
	<div class="content">
		<h3>FORM PENDAFTARAN SIDANG PROYEK</h3>
		<p>Maaf saya gak bisa hosting php lewat github bu. Tapi programnya jalan kok.</p>
		<div >
			<?php
			pre_r($_POST);
			?>
			<form action ="" method="POST"id="pendaftaran">
				<label>NIM</label></label>
					<input name="nim" type="text" >
				<label>Nama</label></lab><input type="text" name="nama">
				<label>Proyek</label>
					<select name="proj">
						<option value="proj1">Proyek 1</option>
						<option value="proj2">Proyek 2</option>
						<option value="proj3">Proyek 3</option>
						<option value="proj4">Proyek 4</option>
					</select>
				<label>Judul Proyek</label></lab><textarea name="judul_proj" rows="5" cols="20"></textarea>
			</form>
			<button form="pendaftaran" class="sendform" type="submit">Submit</button>
			<button form="pendaftaran" class="sendform" type="reset">Reset</button>
			<p>Terima kasih telah melakukan pendaftaran sidang, silahkan tunggu info berikutnya untuk jadwal sidang!</p> 
			<p>Data yang anda masukan adalah sebagai berikut:</p>
			<p>NIM: <?php echo $_POST["nim"]?></p>
			<p>Nama: <?php echo $_POST["nama"]?></p>
			<p>Proyek: <?php echo $_POST["proj"]?></p>
			<p>Judul: <?php echo $_POST["judul_proj"]?></p>
			<?php
				function pre_r( $array ){
				echo "<pre>";
				print_r($array);
				echo "</pre>";}
			?>
		</div>
	</div>
	<div class="footer">
		<p><a target="blank" href="https://drive.google.com/file/d/13Pd5ohWShgwkX8NTSDaHglo6I8DG7y_f/view?usp=sharing">Created by Alif Fathir Rachman (421921052)</a></p>
	</div>
</body>
</html>