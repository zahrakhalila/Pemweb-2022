<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CV_K3521069_Zahra</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		$nama = "Zahra Khalila Salsabila";
		$pekerjaan = "Mahasiswi";
		$ttl = "Madiun, 15 Februari 2004";
		$jenisKelamin = "Perempuan";
		$agama = "Islam";
		$kewarganegaraan = "Indonesia";
		$status = "Belum Menikah";
		$alamat = "Jalan Wanodya Bhakti K-235 RT 30 RW 07 Perum Asabri, Kota Madiun 63118";
		$sd = "MIN Demangan Madiun";
		$smp = "SMPN 1 Madiun";
		$sma = "SMAN 2 Madiun";
		$ptn = "Universitas Sebelas Maret";
		$array = ["Membaca", "Menggambar", "Mendengarkan Musik", "Memasak"];
	?>

	<div class="container">

		<div class="left_side">
			<div class="profileText">
				<div class="imgBox">
					<img src="profil.jpg">
				</div>
				<h2><?= $nama ?><br><span><? $pekerjaan ?></span></h2>
			</div>

			<div class="info">
				<h3 class="title">Detail Data Pribadi</h3>
				<ul>
					<li>
						<h4>Tempat Tanggal Lahir</h4>
						<span class="text"><?= $ttl ?></span>
					</li>
					<li>
						<h4>Jenis Kelamin</h4>
						<span class="text"><?= $jenisKelamin ?></span>
					</li>
					<li>
						<h4>Agama</h4>
						<span class="text"><?= $agama ?></span>
					</li>
					<li>
						<h4>Kewarganegaraan</h4>
						<span class="text"><?= $kewarganegaraan ?></span>
					</li>
					<li>
						<h4>Status</h4>
						<span class="text"><?= $status ?></span>
					</li>
					<li>
						<h4>Alamat</h4>
						<span class="text"><?= $alamat ?></span>
					</li>
				</ul>
			</div>

			<div class="info pendidikan">
				<h3 class="title">Riwayat Pendidikan</h3>
				<ul>
					<li>
						<h5>2009 - 2015</h5>
						<h4>Sekolah Dasar</h4>
						<h4><?= $sd ?></h4>
					</li>
					<li>
						<h5>2015 - 2018</h5>
						<h4>Sekolah Menengah Pertama</h4>
						<h4><?= $smp ?></h4>
					</li>
					<li>
						<h5>2018 - 2021</h5>
						<h4>Sekolah Menengah Atas</h4>
						<h4><?= $sma ?></h4>
					</li>
					<li>
						<h5>2021 - Sekarang</h5>
						<h4>S1 Pendidikan Teknik Informatika dan Komputer</h4>
						<h4><?= $ptn ?></h4>
					</li>
				</ul>
			</div>

			<div class="info bahasa">
				<h3 class="title">Kemampuan Bahasa</h3>
				<ul>
					<li>
						<span class="text">Bahasa Indonesia</span>
						<span class="percent">
							<div style="width:100%"></div>
						</span>
					</li>
					<li>
						<span class="text">Bahasa Inggris</span>
						<span class="percent">
							<div style="width:85%"></div>
						</span>
					</li>
					<li>
						<span class="text">Bahasa Korea</span>
						<span class="percent">
							<div style="width:60%"></div>
						</span>
					</li>
				</ul>
			</div>

			<div class="info kontak">
				<h3 class="title">Kontak</h3>
				<ul>
					<li>
						<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<span class="text">+62 812 3089 0679</span>
					</li>
					<li>
						<span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						<span class="text">zkhalila152@gmail.com</span>
					</li>
					<li>
						<span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
						<span class="text">@zahrakhalila_</span>
					</li>
					<li>
						<span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
						<span class="text">zahrakhalila</span>
					</li>
					<li>
						<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<span class="text">Madiun, Indonesia</span>
					</li>
				</ul>
			</div>
		</div>


		<div class="right_side">
			<div class="about">
				<h2 class="title1">Deskripsi Diri</h2>
				<p>
					Saya adalah mahasiswi S1 program studi Pendidikan Teknik Informatika dan Komputer Universitas Sebelas Maret Surakarta, Indonesia. Saya aktif dalam keanggotaan dan kegiatan organisasi. Saya memiliki ketertarikan tinggi di bidang Rekayasa Perangkat Lunak (RPL), terutama pada database. <br><br>
					Saya merupakan pribadi yang rajin, tekun, disiplin, kreatif, dan inovatif. Saya memiliki pengalaman untuk mengembangkan keterampilan organisasi yang baik, pendekatan analitik atau logis untuk tugas dan kemampuan untuk bekerja di bawah tekanan. Saya mampu bekerja dengan baik sebagai individu maupun sebagai bagian dari tim. Saya juga memiliki kemampuan manajemen waktu dan adaptasi yang baik.
				</p>
			</div>

			<div class="about">
				<h2 class="title1">Pengalaman Organisasi</h2>
				<div class="box">
					<div class="tahun">
						<h5>2019 - 2020</h5>
						<h5>Sie Kerohanian Islam</h5>
					</div>
					<div class="text">
						<h4>Kepala Divisi Pelayanan</h4>
						<p>Divisi Pelayanan bertugas mewadahi penataan dan pengelolaan kegiatan administrasi dalam organisasi agar tertata dengan baik.</p>
					</div>
				</div>
				<div class="box">
					<div class="tahun">
						<h5>2019 - 2020</h5>
						<h5>Kelompok Ilmiah Remaja</h5>
					</div>
					<div class="text">
						<h4>Staff Pemateri</h4>
						<p>Divisi Pemateri bertugas menyiapkan materi apa yang akan disampaikan kepada anggota organisasi setiap pertemuan berlangsung.</p>
					</div>
				</div>
				<div class="box">
					<div class="tahun">
						<h5>2022 - Sekarang</h5>
						<h5>SKI Pabelan</h5>
					</div>
					<div class="text">
						<h4>Staff Pembinaan</h4>
						<p>Divisi Pembinaan bertugas melakukan perencanaan program kerja dan memastikan program kerja berjalan dengan baik.</p>
					</div>
				</div>
			</div>

			<div class="about skills">
				<h2 class="title1">Keahlian dan Kemampuan</h2>
				<div class="box">
					<h4>Python</h4>
					<div class="percent">
						<div style="width: 90%"></div>
					</div>
				</div>
				<div class="box">
					<h4>Database</h4>
					<div class="percent">
						<div style="width: 70%"></div>
					</div>
				</div>
				<div class="box">
					<h4>Photoshop</h4>
					<div class="percent">
						<div style="width: 55%"></div>
					</div>
				</div>
				<div class="box">
					<h4>CorelDraw</h4>
					<div class="percent">
						<div style="width: 60%"></div>
					</div>
				</div>
				<div class="box">
					<h4>HTML</h4>
					<div class="percent">
						<div style="width: 75%"></div>
					</div>
				</div>
				<div class="box">
					<h4>CSS</h4>
					<div class="percent">
						<div style="width: 75%"></div>
					</div>
				</div>
			</div>

			<div class="about prestasi">
				<h2 class="title1">Prestasi</h2>
				<div class="box">
					<div class="tahun">
						<h5>3 Februari 2019</h5>
						<h5>Peserta</h5>
					</div>
					<div class="text">
						<h4>Olimpiade Nasional Electra 9</h4>
						<p>Institut Teknologi Sepuluh November Surabaya</p>
					</div>
				</div>
				<div class="box">
					<div class="tahun">
						<h5>2 Februari 2020</h5>
						<h5>Peserta</h5>
					</div>
					<div class="text">
						<h4>Olimpiade Nasional Electra 10</h4>
						<p>Institut Teknologi Sepuluh November Surabaya</p>
					</div>
				</div>
			</div>

			<div class="about hobbies">
				<h2 class="title1">Hobi</h2>
				<ul>
					<li><i class="fa fa-book" aria-hidden="true"></i> <?= $array[0] ?></li>
					<li><i class="fa fa-paint-brush" aria-hidden="true"></i> <?= $array[1] ?></li>
					<li><i class="fa fa-music" aria-hidden="true"></i> <?= $array[2] ?></li>
					<li><i class="fa fa-cutlery" aria-hidden="true"></i> <?= $array[3] ?></li>
				</ul>
		</div>

	</div>
</body>
</html>