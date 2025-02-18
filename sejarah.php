<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sejarah</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Swiper.js JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
<!-- navbar -->
<?php
include('navbar.php');
?>
<!-- end navbar -->

<!-- Hero Section -->
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">Sejarah Fakultas Teknik</h1>
            <p class="lead fade-in">Universitas Abulyatama</p>
        </div>
</section>

<!--Sejarah Section-->
<section class="my-5 mb-1">
        <div class="sejarah-container">
            <p class="text-justify small-text">Pembukaan  Fakultas Teknik di lingkungan Universitas Abulyatama didasarkan kepada adanya peningkatan kebutuhan masyarakat untuk memperoleh kesempatan mengikuti pendidikan pada jenjang pendidikan tinggi. Peningkatan jumlah lulusan SMA maupun SMK menuntut adanya wadah penyaluran lulusan pada jenjang lebih tinggi. Permintaan lulusan Sekolah Lanjutan Tingkat Atas kepada rekayasa konstruksi dan teknologi yang sangat tinggi.</p>
        </div>
		<h2 class="text-center py-1 mt-1"><b>Timeline</b></h2>
	
	<div class="container-timeline">
		<div class="timeline">
			<div class="timeline-row">
			<div class="timeline-time">
				1984<small>10 September</small>
			</div>
			<div class="timeline-content">
				<i class="icon-attachment"></i>
				<h4> Pendirian Fakultas Teknik</h4>
				<p>
					Fakultas Teknik Universitas Abulyatama didirikan dengan Program Studi Teknik Sipil dan Teknik Mesin, berdasarkan SK Koordinator Kopertis Wilayah I No. 200/SK/Kop.I/84.</p>
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				1985<small>1 Oktober</small>
			</div>
			<div class="timeline-content">
				<i class="icon-code"></i>
				<h4>Akreditasi Pertama Prodi Teknik Sipil</h4>
				<p>
          SK Izin Operasional diterbitkan untuk Program Studi Teknik Sipil dan Teknik Mesin (No. 0415/0/1985)</p>
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				2009<small>12 September</small>
			</div>
			<div class="timeline-content">
				<i class="icon-turned_in_not"></i>
				<h4>Akreditasi Pertama Prodi Teknik Mesin</h4>
				<p>Program Studi Teknik Mesin pertama kali diakreditasi dengan peringkat C (SK BAN-PT No. 028/BAN-PT/Ak-XII/S1/IX/2009).
        </p>
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
      2015
			</div>
			<div class="timeline-content">
				<i class="icon-directions"></i>
				<h4>Akreditasi Kedua Prodi Teknik Mesin dan Teknik Mesin</h4>
				<p>Teknik Mesin kembali diakreditasi dengan peringkat C (SK BAN-PT No. 530/SK/BAN-PT/Akred/S/VI/2015).
Teknik Sipil diakreditasi dengan peringkat B (SK BAN-PT No. 1011/SK/BAN PT/Akred/S/IX/2015).
</p>
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				2019<small>2 Mei</small>
			</div>
			<div class="timeline-content">
				<i class="icon-change_history"></i>
				<h4>Bergabungnya <br/>Prodi Sistem Informasi</h4>
				<p class="no-margin">Program Studi Sistem Informasi bergabung dengan Fakultas Teknik setelah merger STMIK Abulyatama, berdasarkan SK No. 325/KPT/I/2019.</p>
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-time">
				8:00 AM<small>Dec 18</small>
			</div>
			<div class="timeline-content">
				<i class="icon-code"></i>
				<h4>Akreditasi Prodi Sistem Informasi</h4>
				<p>
				Program Studi Sistem Informasi diakreditasi dengan akreditasi Baik (SK BAN-PT No. 7758/BAN-PT/Ak.KP/S/IX/2009)
				</p>
			</div>
		</div>

		<div class="timeline-row">
			<div class="timeline-content">
				<i class="icon-attachment"></i>
				<h4>Continue...</h4>
				<p></p>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->

<script>
      document.addEventListener("DOMContentLoaded", function() {
    const timelineItems = document.querySelectorAll('.timeline-row');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    });

    timelineItems.forEach(item => {
        observer.observe(item);
    });
});

    </script>
<!-- library javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    
<!-- template javascript -->
<script src="js/main.js"></script>

</body>
</html>