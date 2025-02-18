<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="logo-nav">
            <img src="asset\img\logoFTUNAYA.svg" alt="FT UI Logo">
        </div>
        <ul class="menu-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Profile</a>
                <ul class="submenu_dropdown-nav">
                    <li><a href="sejarah.php" class="no-border-hover">Sejarah</a></li>
                    <li><a href="visimisi.php" class="no-border-hover">Visi & Misi</a></li>
                    <li><a href="struktur.php" class="no-border-hover">Struktur Organisasi</a></li>
                    <li><a href="kalender_akademik.php" class="no-border-hover">Kalender Akademik</a></li>
                </ul>
            </li>
            <li><a href="#">Program Studi</a>
                <ul class="submenu_dropdown-nav">
                <li><a href="#" class="no-border-hover">Sistem Informasi</a>
                        <ul class="dropdown-nav">
                            <li><a href="visimisi_SI.php" class="no-border-hover">Visi</a></li>
                            <li><a href="dosen_Tsi.php" class="no-border-hover">Dosen</a></li>
                            <li><a href="kurikulum_Tsi.php" class="no-border-hover">Kurikulum</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="no-border-hover">Teknik Sipil</a>
                        <ul class="dropdown-nav">
                            <li><a href="visimisi_civil.php" class="no-border-hover">Visi</a></li>
                            <li><a href="dosen_Tsipil.php" class="no-border-hover">Dosen</a></li>
                            <li><a href="kurikulum_Tsipil.php" class="no-border-hover">Kurikulum</a></li>
                        </ul>
                    <li><a href="#" class="no-border-hover">Teknik Mesin</a>
                        <ul class="dropdown-nav">
                            <li><a href="visimisi_mesin.php" class="no-border-hover">Visi</a></li>
                            <li><a href="dosen_Tmesin.php" class="no-border-hover">Dosen</a></li>
                            <li><a href="kurikulum_Tmesin.php" class="no-border-hover">Kurikulum</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Pendidikan</a>
                <ul class="submenu_dropdown-nav">
                        <li><a href="laboratorium.php" class="no-border-hover">Laboratorium</a></li>
                        <li><a href="beasiswa.php" class="no-border-hover">Beasiswa</a></li>
                        <li><a href="perpus.php" class="no-border-hover">Perpustakaan</a></li>
                        <li><a href="jurnal.php" class="no-border-hover">Jurnal</a></li>
                    </ul>
            </li>
            <li><a href="#">Kemahasiswaan</a>
            <ul class="submenu_dropdown-nav">
                    <li><a href="layanan.php" class="no-border-hover">Layanan Komunikasi Orang Tua/Wali Mahasiswa</a></li>
                    <li><a href="#" class="no-border-hover">Organisasi Mahasiswa</a>
                        <ul class="dropdown-nav">
                            <li><a href="bem.php" class="no-border-hover">BEM</a></li>
                            <li><a href="himasi.php" class="no-border-hover">Himasi</a></li>
                            <li><a href="himatesya.php" class="no-border-hover">Himatesya</a></li>
                            <li><a href="hmm.php" class="no-border-hover">HMM</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="no-border-hover">UKM</a></li>
                </ul>
            </li>
            <li><a href="#">Award</a>
                <ul class="submenu_dropdown-nav">
                        <li><a href="prestasiDosen.php" class="no-border-hover">Penghargaan Dosen</a></li>
                        <li><a href="prestasiMahasiswa.php" class="no-border-hover">Penghargaan Mahasiswa</a></li>
                    </ul>
                </li>
            <li><a href="kerjasama.php">Kerjasama</a></li>
            <li><a href="#">Download</a>
            <ul class="submenu_dropdown-nav">
                        <li><a href="kegiatan_akademik.php" class="no-border-hover">Kegiatan Akademik</a></li>
                        <li><a href="Magazine.php" class="no-border-hover">E-Magazine</a></li>
                        <li><a href="pengurusan.php" class="no-border-hover">Pengurusan Surat</a></li>
                        <li><a href="SOP.php" class="no-border-hover">SOP / Panduan</a></li>
                        <li><a href="https://drive.google.com/drive/folders/1KO-dTlJQt9lWJoVkNn_BFNZO062cjPwX?usp=sharing" class="no-border-hover">Vidio Intro / Outro Teknik</a></li>
                    </ul>
            </li>
            <li><a href="tracerstudy.php">Tracer Study</a></li>
        </ul>
        <div class="hamburger"><i class="fas fa-bars" style="color: #000"></i></div>
    </nav>

    <div class="mobile-menu">
    <div class="mobile-close"><i class="fas fa-times"></i></div>
    <div class="menu-wrapper-nav">
        <ul class="menu-slide main-menu">
            <li><a href="index.php">Home</a></li>
            <li class="submenu-link" data-target="profile-menu"><a href="#">Profile<i class="ri-arrow-right-s-fill"></i></a></li>
            <li class="submenu-link" data-target="program-menu"><a href="#">Program Studi<i class="ri-arrow-right-s-fill"></i></a></li>
            <li class="submenu-link" data-target="pendidikan-menu"><a href="#">Pendidikan<i class="ri-arrow-right-s-fill"></i></a></li>
            <li class="submenu-link" data-target="kemahasiswaan-menu"><a href="#">Kemahasiswaan<i class="ri-arrow-right-s-fill"></i></a></li>
            <li class="submenu-link" data-target="award-menu"><a href="#">Award<i class="ri-arrow-right-s-fill"></i></a></li>
            <li><a href="kerjasama.php">Kerjasama</a></li>
            <li class="submenu-link" data-target="download-menu"><a href="#">Download<i class="ri-arrow-right-s-fill"></i></a></li>
            <li><a href="tracerstudy.php">Tracer Studi</a></li>
        </ul>

        <!-- Profile Menu -->
        <ul class="menu-slide profile-menu">
            <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="sejarah.php">Sejarah</a></li>
            <li><a href="visimisi.php">Visi & Misi</a></li>
            <li><a href="struktur.php">Struktur Organisasi</a></li>
            <li><a href="kalender_akademik.php">Kalender Akademik</a></li>
        </ul>

        <!-- Program Studi Menu -->
        <ul class="menu-slide program-menu">
            <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li class="submenu-link" data-target="sistemInformasi-menu"><a href="#">Sistem Informasi<i class="ri-arrow-right-s-fill"></i></a></li>
            <li class="submenu-link" data-target="teknikSipil-menu"><a href="#">Teknik Sipil<i class="ri-arrow-right-s-fill"></i></a></li>
            <li class="submenu-link" data-target="teknikMesin-menu"><a href="#">Teknik Mesin<i class="ri-arrow-right-s-fill"></i></a></li>
        </ul>

        <!-- Sistem Informasi Submenu -->
        <ul class="menu-slide sistemInformasi-menu">
            <li class="back-button-nav" data-target="program-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="visimisi_SI.php">Visi</a></li>
            <li><a href="dosen_Tsi.php">Dosen</a></li>
            <li><a href="kurikulum_Tsi.php">Kurikulum</a></li>
        </ul>

        <!-- Teknik Sipil Submenu -->
        <ul class="menu-slide teknikSipil-menu">
            <li class="back-button-nav" data-target="program-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="visimisi_civil.php">Visi</a></li>
            <li><a href="dosen_Tsipil.php">Dosen</a></li>
            <li><a href="kurikulum_Tsipil.">Kurikulum</a></li>
        </ul>

        <!-- Teknik Mesin Submenu -->
        <ul class="menu-slide teknikMesin-menu">
            <li class="back-button-nav" data-target="program-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="visimisi_mesin.php">Visi</a></li>
            <li><a href="dosen_Tmesin.php">Dosen</a></li>
            <li><a href="kurikulum_Tmesin.php">Kurikulum</a></li>
        </ul>

        <!-- Menu Pendidikan -->
        <ul class="menu-slide pendidikan-menu">
            <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="laboratorium.php">Laboratorium</a></li>
            <li><a href="beasiswa.php">Beasiswa</a></li>
            <li><a href="perpus.php">Perpustakaan</a></li>
            <li><a href="jurnal.php">Jurnal</a></li>
        </ul>

        <!-- Menu Kemahasiswaan -->
        <ul class="menu-slide kemahasiswaan-menu">
            <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="layanan.php">Layanan Komunikasi Orang Tua/Wali Mahasiswa</a></li>
            <li class="submenu-link" data-target="Organisasi-menu"><a href="#">Organisasi Mahasiswa<i class="ri-arrow-right-s-fill"></i></a></li>
            <li><a href="#">UKM</a></li>
        </ul>

        <!-- Organisasi Submenu -->
        <ul class="menu-slide Organisasi-menu">
            <li class="back-button-nav" data-target="kemahasiswaan-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="bem.php">BEM</a></li>
            <li><a href="himasi.php">Himasi</a></li>
            <li><a href="himatesya.php">Himatesya</a></li>
            <li><a href="hmm.php">HMM</a></li>
        </ul>

        <!-- Menu Award -->
        <ul class="menu-slide award-menu">
            <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="prestasiDosen.php">Prestasi Dosen</a></li>
            <li><a href="prestasiMahasiswa.php">Prestasi Mahasiswa</a></li>
        </ul>

        <!--Menu Download -->
        <ul class="menu-slide download-menu">
            <li class="back-button-nav" data-target="main-menu"><i class="ri-arrow-left-wide-fill"></i>Back</li>
            <li><a href="kegiatan_akademik.php">Kegiatan Akademik</a></li>
            <li><a href="Magazine.php">E-Magazine</a></li>
            <li><a href="pengurusan.php">Pengurusan Surat</a></li>
            <li><a href="SOP.php">SOP / Panduan</a></li>
            <li><a href="https://drive.google.com/drive/folders/1KO-dTlJQt9lWJoVkNn_BFNZO062cjPwX?usp=sharing">Vidio Intro / Outro Teknik</a></li>
        </ul>

    </div>
</div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeBtn = document.querySelector('.mobile-close');
    const menuSlides = document.querySelectorAll('.menu-slide');
    const submenuLinks = document.querySelectorAll('.submenu-link');
    const backButtons = document.querySelectorAll('.back-button-nav');

    // Fungsi untuk menampilkan menu yang dituju
    function showMenu(targetClass) {
        menuSlides.forEach(menu => menu.style.display = 'none'); // Sembunyikan semua menu
        const targetElement = document.querySelector(`.${targetClass}`);
        if (targetElement) {
            targetElement.style.display = 'block'; // Tampilkan menu yang dituju
        }
    }

    // Tampilkan mobile menu saat hamburger diklik
    hamburger.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        showMenu('main-menu'); // Buka menu utama
    });

    // Tutup mobile menu saat tombol close diklik
    closeBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        menuSlides.forEach(menu => menu.style.display = 'none'); // Sembunyikan semua menu
    });

    // Navigasi ke submenu saat submenu-link diklik
    submenuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('data-target');
            showMenu(target);
        });
    });

    // Navigasi kembali saat tombol back diklik
    backButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            showMenu(target);
        });
    });
});


</script>
