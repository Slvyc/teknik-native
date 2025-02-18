<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Fakultas Teknik - Multi-Level Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        nav {
            background-color: #fff;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 0px 5px hsla(220, 32%, 8%, .1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 210px;      
            height: 60px;      
            object-fit: cover; 
            object-position: center; 
            margin-top: 5px;
        }

        .menu {
            display: flex;
            gap: 30px;
            list-style: none;
            position: relative;
        }

        .menu li {
            color:#000;
            font-weight: 500;
            position: relative;
            cursor: pointer;
            transition: color 0.3s ease;
            padding: 10px 0;
            text-decoration: none;
        }

        .menu li a {
            color: inherit;
            text-decoration: none;
            padding: 50px 0;
        }

        .submenu_dropdown {
            position: absolute;
            list-style: none;
            top: 82px;
            left: 0;
            background: #f4f4f4;
            color: #000;
            display: none;
            flex-direction: column;
            min-width: 220px;
            padding: 10px 0;
            transition: all 0.5s ease;
            z-index: 1100;
        }
        
        .menu li:hover .submenu_dropdown {
            display: flex;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-10px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .submenu_dropdown li {
            padding: 15px 25px;
            transition: background 0.3s ease;
            border-left: 4px solid transparent;
            position: relative;
        }

        .dropdown {
            position: absolute;
            list-style: none;
            top: 0;
            left: 100%;
            background: #f4f4f4;
            color: #000;
            display: none;
            flex-direction: column;
            min-width: 200px;
            padding: 10px 0;
            transition: all 0.5s ease;
            z-index: 1101;
        }

        .submenu_dropdown li:hover .dropdown {
            display: flex;
        }

        .dropdown li {
            padding: 15px 20px;
            text-decoration: none;
            position: relative;
        }

        .dropdown .sub-dropdown {
            position: absolute;
            list-style: none;
            top: 0;
            left: 100%;
            background: #f4f4f4;
            color: #000;
            display: none;
            flex-direction: column;
            min-width: 200px;
            padding: 10px 0;
            transition: all 0.5s ease;
            z-index: 1102;
        }

        .dropdown li:hover .sub-dropdown {
            display: flex;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 28px;
            transition: transform 0.3s ease;
            z-index: 1101;
        }

        .hamburger:hover {
            transform: rotate(90deg);
            color: #FFD700;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 60%;
            height: 100%;
            background: #1a1a1a !important;
            color: #fff;
            padding: 60px 30px;
            transition: right 0.5s ease;
            display: flex;
            flex-direction: column;
            gap: 25px;
            z-index: 1102;
            box-shadow: -4px 0 15px rgba(0, 0, 0, 0.7);
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu li {
            list-style: none;
            padding: 18px;
            border-bottom: 1px solid #333;
            cursor: pointer;
            transition: background 0.3s;
            text-transform: uppercase;
        }

        .mobile-menu li a{
            list-style: none;
            color: #fff;
            text-decoration: none;
        }

        .mobile-menu li:hover {
            background: #333;
            border-left: 5px solid #FFD700;
        }

        .mobile-close {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 32px;
            cursor: pointer;
            z-index: 1103;
            color: #FFD700;
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
            }

            .logo{
                margin-left: -25px;
            }

            .hamburger {
                display: block;
            }
        }

    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="asset\img\logoFTUNAYA.svg" alt="FT UI Logo">
        </div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a>
                <ul class="submenu_dropdown">
                    <li><a href="#">Sejarah</a></li>
                    <li><a href="#">Visi & Misi</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                    <li><a href="#">Kalender Akademik</a></li>
                </ul>
            </li>
            <li><a href="#">Program Studi</a>
                <ul class="submenu_dropdown">
                <li><a href="#">Sistem Informasi <i class="ri-arrow-right-s-fill"></i></a>
                        <ul class="dropdown">
                            <li><a href="#">Visi</a></li>
                            <li><a href="#">Dosen</a></li>
                            <li><a href="#">Kurikulum</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Teknik Sipil <i class="ri-arrow-right-s-fill"></i></a>
                        <ul class="dropdown">
                            <li><a href="#">Visi</a></li>
                            <li><a href="#">Dosen</a></li>
                            <li><a href="#">Kurikulum</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Teknik Mesin<i class="ri-arrow-right-s-fill"></i></a>
                        <ul class="dropdown">
                            <li><a href="#">Visi</a></li>
                            <li><a href="#">Dosen</a></li>
                            <li><a href="#">Kurikulum</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Pendidikan</a>
                <ul class="submenu_dropdown">
                        <li><a href="#">Laboratorium</a></li>
                        <li><a href="#">Beasiswa</a></li>
                        <li><a href="#">Perpustakaan</a></li>
                        <li><a href="#">Jurnal</a></li>
                    </ul>
            </li>
            <li><a href="#">Kemahasiswaan</a>
            <ul class="submenu_dropdown">
                    <li><a href="#">Layanan Komunikasi Orang Tua/Wali Mahasiswa</a></li>
                    <li><a href="#">Organisasi<i class="ri-arrow-right-s-fill"></i></a>
                        <ul class="dropdown">
                            <li><a href="#">BEM</a></li>
                            <li><a href="#">Himasi</a></li>
                            <li><a href="#">Himatesya</a></li>
                            <li><a href="#">HMM</a></li>
                        </ul>
                    </li>
                    <li><a href="#">UKM</a></li>
                </ul>
            </li>
            <li><a href="#">Award</a>
                <ul class="submenu_dropdown">
                        <li><a href="#">Penghargaan Dosen</a></li>
                        <li><a href="#">Penghargaan Mahasiswa</a></li>
                    </ul>
                </li>
            <li><a href="#">Kerjasama</a></li>
            <li><a href="#">Download</a>
            <ul class="submenu_dropdown">
                        <li><a href="#">Kegiatan Akademik</a></li>
                        <li><a href="#">E-Magazine</a></li>
                        <li><a href="#">Pengurusan Surat</a></li>
                        <li><a href="#">SOP / Panduan</a></li>
                        <li><a href="#">Vidio Intro / Outro Teknik</a></li>
                    </ul>
            </li>
            <li><a href="#">Tracer Study</a></li>
        </ul>
        <div class="hamburger"><i class="fas fa-bars" style="color: #000"></i></div>
    </nav>

    <ul class="mobile-menu">
        <div class="mobile-close"><i class="fas fa-times"></i></div>
        <li><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Program Studi</a></li>
        <li><a href="#">Pendidikan</a></li>
        <li><a href="#">Kemahasiswaan</a></li>
        <li><a href="#">Award</a></li>
        <li><a href="#">Kerjasama</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Tracer Studi</a></li>
    </ul>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const mobileMenu = document.querySelector('.mobile-menu');
        const closeBtn = document.querySelector('.mobile-close');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });

        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });
    </script>
</body>
</html>