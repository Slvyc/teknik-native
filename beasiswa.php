<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fakultas Teknik</title>
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

<body class="body-beasiswa">
<!-- navbar -->
<?php include('navbar.php'); ?>
<!-- end navbar -->

<!-- Hero Section --> 
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Portal Beasiswa Terkini</h1>
        <p class="lead">Temukan Beasiswa Yang Sesuai Dengan Kebutuhan dan Kemampuan Anda</p>
    </div>
</section>

<!-- main content -->
<div class="container-beasiswa-fluid py-5">
    <div class="row justify-content-center ">

        <!-- Beasiswa KIP -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-60 border-0 shadow-sm beasiswa-hover-card beasiswa-card beasiswa-primary">
                <div class="beasiswa-card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="beasiswa-icon-wrapper me-3 beasiswa-bg-primary-light"><i class="fas fa-graduation-cap text-primary"></i></div>
                        <h3 class="beasiswa-card-title mb-0">Beasiswa KIP</h3>
                    </div>
                    <p class="beasiswa-card-text">Program bantuan pendidikan dari pemerintah Indonesia untuk siswa kurang mampu.</p>
                    <h5 class="mt-4 mb-3">Persyaratan:</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Untuk lulusan siswa SMA/SMK</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Pas Futu berwarna 4x6 (2 lembar)</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Fotocopy KTP dan KK</li>
                    </ul>
                </div>
                <div class="beasiswa-card-footer bg-transparent border-0">
                    <a href="https://kip-kuliah.kemdikbud.go.id/" class="btn btn-primary w-100 beasiswa-btn">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Beasiswa GenBI -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-60 border-0 shadow-sm beasiswa-hover-card beasiswa-card beasiswa-success">
                <div class="beasiswa-card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="beasiswa-icon-wrapper me-3 beasiswa-bg-primary-light"><i class="fas fa-graduation-cap text-success"></i></div>
                        <h3 class="beasiswa-card-title mb-0">Beasiswa GenBI</h3>
                    </div>
                    <p class="beasiswa-card-text">Program beasiswa dari Bank Indonesia untuk mahasiswa berprestasi.</p>
                    <h5 class="mt-4 mb-3">Persyaratan:</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success me-2"></i>Minimal mahasiswa S1 semester 3</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Memiliki IPK minimum 3,25</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i>Umur maksimal 24 tahun (S1)</li>
                    </ul>
                </div>
                <div class="beasiswa-card-footer bg-transparent border-0">
                    <a href="https://kip-kuliah.kemdikbud.go.id/" class="btn btn-success w-100 beasiswa-btn">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Beasiswa Baitul Mal -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-60 border-0 shadow-sm beasiswa-hover-card beasiswa-card beasiswa-warning">
                <div class="beasiswa-card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="beasiswa-icon-wrapper me-3 beasiswa-bg-primary-light"><i class="fas fa-graduation-cap text-warning"></i></div>
                        <h3 class="beasiswa-card-title mb-0">Beasiswa Baitul Mal</h3>
                    </div>
                    <p class="beasiswa-card-text">Program bantuan pendidikan dari lembaga Baitul Mal untuk pelajar dan mahasiswa kurang mampu.</p>
                    <h5 class="mt-4 mb-3">Persyaratan:</h5>
                    <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-warning me-2"></i>Ber-KTP dan KK Aceh</li>
                        <li><i class="fas fa-check-circle text-warning me-2"></i>Mahasiswa aktif di wilayah Aceh</li>
                        <li><i class="fas fa-check-circle text-warning me-2"></i>IPK minimal 3.00</li>
                    </ul>
                </div>
                <div class="beasiswa-card-footer bg-transparent border-0">
                    <a href="https://kip-kuliah.kemdikbud.go.id/" class="btn btn-warning w-100 beasiswa-btn">Informasi Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
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