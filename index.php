<?php
include 'db.php';
$result = $conn->query("SELECT * FROM berita ORDER BY date DESC");
$result2 = $conn->query("SELECT * FROM agenda ORDER BY date DESC");
$result3 = $conn->query("SELECT * FROM pengumuman ORDER BY date DESC");
?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fakultas Teknik</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Swiper.js JS -->
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css" />

</head>
    <!-- Loading Screen -->
    <!-- <div id="loading-screen"> -->
            <!-- <div cla   ss="loading-logo"><span class="border-spinner"></span> -->
                <!-- <img src="asset\img\unayaaaa.png" -->
                    <!-- alt="Logo Universitas Abulyatama" class="fade-logo"> -->
            <!-- </div> -->
<!--       </div> -->
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Video -->
    <div class="index-video-hero">
        <video class="index-video" autoplay loop muted>
            <source src="asset\Intro Teknik 1.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Selamat -->
    <div class="hero-section-sambutan" style="background-image: url('asset/img/background dekan sambutan (1).png');">
        <!-- Main Content -->
        <div class="container-sambutan">
            <div class="text-content-sambutan">
                <h1 class="title-sambutan">Dr. Ir. Cut Rahmawati, M.T., IPM., ASEAN Eng.</h1>
                <h2 class="subtitle-sambutan">Dekan Fakultas Teknik</h2>
                <p class="description-sambutan">
                    Selamat datang di Fakultas Teknik Universitas Abulyatama. Fakultas Teknik UNAYA menyelenggarakan pendidikan rekayasa teknik yang memiliki keunggulan pada inovasi dan berkomitmen mencetak generasi unggul yang siap membawa perubahan. Mari bergabung bersama kami dalam penyelenggaraan pembelajaran yang terintegrasi dengan riset unggulan. Kami berkomitmen menyebarkan hasil riset unggulan untuk pengembangan Dunia Usaha dan Industri (DUDI) serta kebutuhan masyarakat.
                </p>
            </div>

            <!-- Dean's Photo with Batik Pattern behind and below -->
            <div class="dekan-photo-container" style="background-image: url('asset/img/element 1.png');">
                <img src="asset/img/bu cutt.png" alt="Dekan Fakultas Teknik" class="dekan-photo">
            </div>
        </div>
    </div>

<!-- berita baru -->
<div class="container-fluid-news">
    <h2 class="news-titles">Berita</h2>
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <?php while ($row = $result->fetch_assoc()): ?>
                <div class="post-slide" onclick="openPopup(this)">
                    <div class="post-img">
                        <img src="admin/uploads/<?php echo $row['image_news']; ?>" alt="">
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
    
<!-- container announcement -->
    <div class="container-announcement">
        <!-- pengunguman -->
         
        <section class="announcements">
            <h2 class="title-announcement">Pengumumann</h2>
            <?php while ($row = $result3->fetch_assoc()): ?>
            <a href="<?php echo htmlspecialchars($row['link']); ?>" class="card-link">
                <div class="announcement">
                <div class="date1"><span><?php echo $row['tanggal_pengumuman'];?></span><br><?php echo substr($row["bulan_pengumuman"], 0, 3); ?></div>
                    <div class="content">
                      <h3 class="title"><?php echo $row['judul_pengumuman'];?> </h3>
                      <p class="description"><?php echo $row['desc_pengumuman'];?></p>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>
        </section>
        
        <!-- agenda -->
        <section class="agenda">
            <h2 class="title-event">Agenda</h2>
            <?php while ($row = $result2->fetch_assoc()): ?> 
                <div class="event">
                    <div class="date"><span><?php echo $row['tahun_agenda']; ?></span></div>
                    <div class="content">
                      <h3 class="event-title"><?php echo $row['judul_agenda']; ?></h3>
                      <p class="time"><?php echo $row['masa_agenda']; ?></p>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>
        </section>
    </div>

    <!-- Fitur 4 -->
    <!-- card pertama -->
    <section class="card-section">
        <h2 class="title-portal">Portal Akademik & Kemahasiswaan</h2>
    <div class="home-container mb-2 mt-5">
    <div class="d-lg-flex justify-content-center">
        <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
            <div class="home-col2">
                <a href="https://siakad.unaya.ac.id/" target="_blank" class="home-card pb-4">
                    <span class="fas fa-building-columns mt-3"></span>
                    <p class="home-h4 pt-4">SIAKAD</p>
                    <p class="p1 text-center">
                        Sistem Informasi Akademik Unaya
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://simaya.unaya.ac.id/" target="_blank" class="home-card pb-4">
                    <span class="fas fa-building-columns mt-3"></span>
                    <p class="home-h4 pt-4">SIMAYA</p>
                    <p class="p1 text-center">
                        Sistem MBKM Universitas Abulyatama     
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://www.instagram.com/himasi_unaya?igsh=MWcybTEzaHV5czA0dw==" target="_blank" class="home-card pb-4">
                    <span class="fas fa-computer mt-3"></span>
                    <p class="home-h4 pt-4">HIMASI</p>
                    <p class="p1 text-center">
                        Himpunan Mahasiswa Sistem Informasi
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://www.instagram.com/himatesya?igsh=MTR6em9wMG5uNjZtYQ==" target="_blank" class="home-card pb-4">
                    <span class="fas fa-city mt-3"></span>
                    <p class="home-h4 pt-4">HIMATESYA</p>
                    <p class="p1 text-center">
                        Himpunan Mahasiswa Teknik Sipil
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
            <div class="home-col2">
                <a href="https://www.instagram.com/hmm_unaya?igsh=N2Fkcms3M3NlODNt" target="_blank" class="home-card pb-4">
                    <span class="fas fa-gears mt-3"></span>
                    <p class="home-h4 pt-4">HMM</p>
                    <p class="p1 text-center">
                        Himpunan Mahasiswa Teknik Mesin
                    </p>
                    <span class="fas fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pu-section">
    <div class="pu-content">
        <div class="pu-text">
            <h1>
                <span class="pu-highlight">Klinik</span> Rumah <br> <span class="pu-bold">Swadaya</span>
            </h1>
            <p class="pu-subtitle">Konsultasi Untuk Hunian Layak!</p>
            <p class="pu-description">Hidup yang tenteram berawal dari rumah yang layak</p>
            <a href="https://krs.perumahan.pu.go.id/" target="_blank" class="pu-button">Mulai Konsultasi →</a>
        </div>
        <div class="pu-image">
            <img src="asset\img\swadaya.png" alt="Klinik Rumah Swadaya">
        </div>
    </div>
</section>


    <!-- sponsor -->
<section class="sponsor-logos-section">
  <div class="logos">
    <div class="logos-slide">
      <img src="asset/img/sponsor/Ban PT.jpg" />
      <img src="asset/img/sponsor/Lam Teknikk.jpeg" />
      <img src="asset/img/sponsor/Kampus Merdeka.jpg" />
      <img src="asset/img/sponsor/Tut Wuri.jpg" />
      <img src="asset/img/sponsor/pancacita.png" />
      <img src="asset/img/sponsor/Syiah Kuala.png" />
      <img src="asset/img/sponsor/UPM.png" />
      <img src="asset/img/sponsor/teuku umar.png" />
      <img src="asset/img/sponsor/iskandar muda.png" />
      <img src="asset/img/sponsor/politeknik negeri lhokseumawe.png" />
      <img src="asset/img/sponsor/instutut sains.png" />
      <img src="asset/img/sponsor/halu oleo.png" style="width: 200px; height: auto;" />
      <img src="asset/img/sponsor/bank sampah.png" />
    </div>
  </div>
</section>
    <!-- end sponsor -->
    
    <!-- Footer -->
     <?php include('footer.php'); ?>
     <!-- End Footer -->
      
     <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
      // Wait for the window to load completely
      window.addEventListener("load", function () {
        // Hide the loading screen after the page has loaded
        document.getElementById("loading-screen").style.display = "none";
      });

      // Function to check if an element is in the viewport
      function isElementInView(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top < window.innerHeight && rect.bottom >= 0
        );
      }

      // Scroll event listener
      window.addEventListener("scroll", function () {
        const sambutanSection = document.querySelector(".index-sambutan");
        const sambutanFoto = document.querySelector(".index-sambutan-foto");
        const sambutanOverlay = document.querySelector(".index-sambutan-overlay");

        // Check if the section is in view and if it is not already active
        if (isElementInView(sambutanSection) && !sambutanSection.classList.contains("active")) {
          sambutanSection.classList.add("active");
          sambutanFoto.classList.add("active");
          sambutanOverlay.classList.add("active");
        }
      });
    </script>

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

    <script>
      window.addEventListener("load", function() {
          setTimeout(function() {
                  var loadingScreen = document.getElementById("loading-screen");
                  loadingScreen.style.opacity = "0"; // Mulai fade-out pada loading screen

                  setTimeout(function() {
                          loadingScreen.style.display =
                              "none"; // Menghilangkan loading screen setelah fade-out
                      }

                      , 1000); // Durasi fade-out
              }

              , 3000); // Durasi tampil sebelum fade-out
      });
      </script>

      <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
      </script>
  
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>