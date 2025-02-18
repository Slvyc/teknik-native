<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
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
    <div>
        <h1 class="display-4 fw-bold">Jelajahi Masa Depan Pengetahuan</h1>
        <p class="lead">Temukan Inspirasi, Inovasi, dan Wawasan baru di Perpustakaan Fakultas Ultra Modern Kami</p>
        <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom1 btn-lg">Mulai Petualangan</a>
    </div>
</section>

<!-- main content -->
 <!-- Koleksi Terbaru -->
 <section class="py-5" id="koleksi">
        <div class="container-perpus">
            <h2 class="text-center perpus-section-title">Koleksi Terkini</h2>
            <div class="content-perpus row">
                <div class="col-md-4">
                    <div class="card perpus-card h-100">
                        <img src="asset/img/buku1.jpg" class="perpus-card-img-top" alt="Buku 1">
                        <div class="card-body-perpus">
                            <h5 class="perpus-card-title">Revolusi AI dalam Pendidikan</h5>
                            <p class="card-text">Eksplorasi mendalam tentang bagaimana AI mengubah lanskap pendidikan global.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-sm">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card perpus-card-1 h-100">
                        <img src="asset/img/buku2.jpg" class="perpus-card-img-top" alt="Buku 2">
                        <div class="card-body-perpus">
                            <h5 class="perpus-card-title">Fisika Kuantum untuk Masa Depan</h5>
                            <p class="card-text">Panduan komprehensif tentang aplikasi fisika kuantum dalam teknologi modern.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-sm">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card perpus-card-2 h-100">
                        <img src="asset/img/buku3.jpg" class="perpus-card-img-top" alt="Buku 3">
                        <div class="card-body-perpus">
                            <h5 class="perpus-card-title">Bioteknologi: Merancang Kehidupan</h5>
                            <p class="card-text">Eksplorasi etika dan inovasi dalam rekayasa genetika dan bioteknologi.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-sm">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="bg-white">
        <div class="container-layanan-perpus">
            <h2 class="text-center perpus-section-title">Layanan Unggulan Kami</h2>
            <div class="content-perpus row g-5">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-user-check perpus-service-icon"></i>
                        <h4>Absen Digital</h4>
                        <p>Solusi modern untuk absensi yang efisien dan akurat menggunakan teknologi digital.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-snowflake perpus-service-icon"></i>
                        <h4>AC</h4>
                        <p>Ruang yang nyaman dengan pendingin udara untuk pengalaman belajar yang optimal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-table perpus-service-icon"></i>
                        <h4>Meja Meeting</h4>
                        <p>Fasilitas meja meeting untuk diskusi dan kolaborasi yang produktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Perpustakaan -->
    <section class="bg-perpus-custom">
        <div class="container-perpus-statistik">
            <h2 class="text-center perpus-section-title">Statistik Perpustakaan</h2>
            <div class="content-perpus row text-center">
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">100,000+</h3>
                    <p class="perpus-lead">E-Book & Sumber Digital</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">50,000+</h3>
                    <p class="perpus-lead">Pengguna Aktif</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">500+</h3>
                    <p class="perpus-lead">Kursus Online</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">24/7</h3>
                    <p class="perpus-lead">Akses Global</p>
                </div>
            </div>
        </div>
    </section>
<!-- end content -->    

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->


<!-- library javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    
<!-- template javascript -->
<script src="js/main.js"></script>

</body>
</html>