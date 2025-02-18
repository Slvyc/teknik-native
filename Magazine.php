<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Magazine</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Teko:wght@300..700&display=swap" rel="stylesheet">
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
    <div>
        <h1 class="display-4 fw-bold">E-Magazine</h1>
        <p class="lead">Temukan Inspirasi, Inovasi, dan Wawasan baru di Laboratorium Fakultas Ultra Modern Kami</p>
    </div>
</section>

<!-- Content -->
<div class="buku-container">
        <div class="buku-list">
            <div class="buku-item">
                <div class="buku-detail">
                    <a href="https://online.flippingbook.com/view/419524760/" class="fbo-embed" data-fbo-id="0f84c88a06" data-fbo-ratio="3:2" data-fbo-lightbox="yes" data-fbo-width="100%" data-fbo-height="auto" data-fbo-version="1" style="max-width: 100%">
                        <script async defer src="https://online.flippingbook.com/EmbedScriptUrl.aspx?m=redir&hid=419524760"></script>
                    </a>
                    <h4 class="magazine-title">Riset dan Industri : Sinergi Akademisi dan Praktisi</h4>
                    <h5>VOL 1, NO 1</h5>
                    <h5>Januari 2025</h5>
                </div>
            </div>
        </div>
    </div>

<!-- End Content -->


<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
