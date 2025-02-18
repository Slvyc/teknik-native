<?php
include 'db.php';
$result = $conn->query("SELECT * FROM kegiatan_himasi ORDER BY date DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Himasi</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- caraousel bootstrap -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
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
        <h1 class="display-4 fw-bold">Himpunan Mahasiswa Sistem Informasi</h1>
        <p class="lead">Membangun Masa Depan dengan Teknologi</p>
    </div>
</section>

<!-- main content -->
<div class="bem-section">
    <div class="container">
        <!-- <h2 class="bem-section-title mb-5">Visi dan Misi <br>Badan Eksekutif Mahasiswa</h2> -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="bem-image-wrapper">
                    <img src="asset\img\HIMASI.svg" alt="Logo Universitas Abulyatama">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion bem-accordion" id="accordionMasukan">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan1" aria-expanded="false" aria-controls="collapseMasukan1">
                                <i class="fas fa-book-open me-2"></i> Visi Himpunan Mahasiswa Sistem Informasi
                            </button>
                        </h2>
                        <div id="collapseMasukan1" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                            Menciptakan mahasiswa IT yang berwawasan global, inovativ, menjunjung nilai kekeluargaan, dan mampu menginspirasi lingkungan sekitar.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan2" aria-expanded="false" aria-controls="collapseMasukan2">
                                <i class="fas fa-user-graduate me-2"></i> Misi Himpunan Mahasiswa Sistem Informasi
                            </button>
                        </h2>
                        <div id="collapseMasukan2" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                                <li>
                                Menyediakan program-program inovatif dan mendukung program-program jurusan Sistem Informasi 
                                guna meningkatkan pengetahuan dan  kreativitas mahasiswa
                                </li>
                                <li>
                                Meningkatkan soft skills anggota guna memaksimalkan potensi yang dimiliki
                                </li>
                                <li>
                                Menumbuhkan nilai kekeluargaan dan rasa solidaritas pada lingkungan 
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- Struktur Organisasi Section -->

<section class="struktur-section">
    <section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-2 mt-2" style="color: #f9f3d9">Struktur Organisasi Himasi</h2>
    </section>
        <div class="container-himpunan text-center  mt-5">
            <!-- <h6 class="bem-section-title">Struktur Organisasi Himasi</h6> -->
            <!-- Gambar Struktur Organisasi -->
            <img src="asset\img\Struktur Himasi.png" alt="Struktur Organisasi Fakultas Teknik" class="org-maha-image">
            <!-- Ganti URL gambar di atas dengan path gambar struktur organisasi Anda -->
        </div>
</section>

<!-- Carousel Himpunan News -->

<section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-2 mt-2" style="color: #f9f3d9">Kegiatan Himasi</h2>
    </section>
<section class="bem-section py-5">
    
<!-- end carousel himpunan news -->

<!-- berita baru -->
<div class="container-fluid-news mt-5">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <?php while ($row = $result->fetch_assoc()): ?>
                <div class="post-slide" onclick="openPopup(this)">
                    <div class="post-img">
                        <img src="admin/uploads/<?php echo $row['image_himasi']; ?>" alt="">
                        <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                        <a href="#"><?php echo $row['title']; ?></a>
                        </h3>
                        <p class="post-description" data-full-description="<?php echo $row['description']; ?>">
                            <?php echo substr($row['description'], 0, 100) . '......'; ?>
                        </p>
                        <span class="post-date"><i class="fa fa-clock-o"></i><?php echo date('d F Y', strtotime($row['date'])); ?></span>
                        <a href="#" class="read-more"></a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div> 

<!-- Pop-up Modal Berita -->
    <div id="news-popup" class="popup" style="display:none;">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <img id="popup-image" src="" alt="" style="width: 100%; border-radius: 10px; margin-bottom: 10px;">
            <h3 id="popup-title"><?php echo $row['title']; ?></h3>
            <p id="popup-description"><?php echo $row['description']; ?></p>
            <span id="popup-date"><i class="fa fa-clock-o"></i><?php echo date('d F Y', strtotime($row['date'])); ?></span>
        </div>
    </div>
<!-- end berita baru -->

<!-- end content -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->

<!-- library javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    
<!-- caraousel kegiatan -->
<script>
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items : 3,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });

    function openPopup(element) {
        const title = element.querySelector('.post-title a').innerText;
        const description = element.querySelector('.post-description').getAttribute('data-full-description');
        const imageSrc = element.querySelector('.post-img img').src;
        const dateNews = element.querySelector('.post-date').innerText;

        document.getElementById('popup-title').innerText = title;
        document.getElementById('popup-description').innerText = description;
        document.getElementById('popup-image').src = imageSrc;
        document.getElementById('popup-date').innerText = dateNews;

        document.getElementById('news-popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('news-popup').style.display = 'none';
    }
</script>

<!-- template javascript -->
<script src="js/main.js"></script>


</body>
</html>
