<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Fakultas Teknik</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #333;
        }

        nav {
            background-color: #002D72;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            border-bottom: 3px solid #FFD700;
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
            height: 40px;
            border-radius: 50%;
            border: 2px solid #FFD700;
            padding: 5px;
            background-color: #fff;
        }

        .menu {
            display: flex;
            gap: 30px;
            list-style: none;
            position: relative;
        }

        .menu li {
            position: relative;
            cursor: pointer;
            transition: color 0.3s ease;
            padding: 10px 0;
        }

        .menu li:hover {
            color: #FFD700;
        }

        .menu li .submenu {
            position: absolute;
            top: 80px;
            left: 0;
            background: #fff;
            color: #000;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            display: none;
            flex-direction: column;
            min-width: 220px;
            padding: 10px 0;
            transition: all 0.5s ease;
            z-index: 1100;
            overflow: hidden;
        }

        .menu li:hover .submenu {
            display: flex;
            animation: fadeIn 0.9s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-10px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .submenu li {
            padding: 15px 25px;
            transition: background 0.3s ease;
            border-left: 4px solid transparent;
            position: relative;
        }

        .submenu li:hover {
            background: linear-gradient(135deg, #003d99, #0052cc);
            color: #fff;
            border-left: 4px solid #FFD700;
            border-radius: 0 10px 10px 0;
        }

        .submenu .submenu {
            position: absolute;
            top: 0;
            left: 100%;
            background: #fff;
            color: #000;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            display: none;
            flex-direction: column;
            min-width: 200px;
            padding: 10px 0;
            transition: all 0.5s ease;
            z-index: 1101;
        }

        .submenu li:hover .submenu {
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
            background: #1a1a1a;
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

            .hamburger {
                display: block;
            }
        }

        .footer {
            background-color: #002D72;
            color: #fff;
            padding: 30px 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            border-top: 3px solid #FFD700;
            font-size: 14px;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Logo_UI_%28vectorized%29.svg/2048px-Logo_UI_%28vectorized%29.svg.png" alt="FT UI Logo">
            Fakultas Teknik
        </div>
        <ul class="menu">
            <li>Beranda</li>
            <li>Profil
                <ul class="submenu">
                    <li>Visi & Misi</li>
                    <li>Sejarah</li>
                    <li>Struktur Organisasi</li>
                </ul>
            </li>
            <li>Pendidikan
                <ul class="submenu">
                    <li>Kalender Akademik</li>
                    <li>Peraturan Akademik</li>
                    <li>Departemen
                        <ul class="submenu">
                            <li>Teknik Sipil
                                <ul class="submenu">
                                    <li>S1</li>
                                    <li>S2</li>
                                    <li>S3</li>
                                </ul>
                            </li>
                            <li>Teknik Mesin</li>
                            <li>Teknik Elektro</li>
                            <li>Teknik Kimia</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Riset & Pengmas</li>
            <li>Unit Kerjasama</li>
            <li>Fasilitas & Umum</li>
            <li>Akses Cepat</li>
            <li>Tentang Kami</li>
            <li>Kontak</li>
        </ul>
        <div class="hamburger"><i class="fas fa-bars"></i></div>
    </nav>

    <ul class="mobile-menu">
        <div class="mobile-close"><i class="fas fa-times"></i></div>
        <li>Beranda</li>
        <li>Profil</li>
        <li>Pendidikan</li>
        <li>Riset & Pengmas</li>
        <li>Unit Kerjasama</li>
        <li>Fasilitas & Umum</li>
        <li>Akses Cepat</li>
        <li>Tentang Kami</li>
        <li>Kontak</li>
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
