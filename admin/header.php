<?php
session_start();
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0d6efd;
            padding-top: 20px;
            color: white;
        }
        .sidebar .navbar-brand {
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
            font-size: 1.25rem;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,.8);
            padding: 10px 15px;
        }
        .sidebar .nav-link:hover {
            color: white;
            background-color: rgba(255,255,255,.1);
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .user-info {
            padding: 15px;
            border-top: 1px solid rgba(255,255,255,.1);
            margin-top: auto;
        }
        .sidebar-nav {
            height: calc(100vh - 180px);
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a class="navbar-brand" href="index.php">Teknik Unaya</a>
        <div class="sidebar-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_berita.php"><i class="fas fa-newspaper me-2"></i>Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_agenda.php"><i class="fas fa-calendar me-2"></i>Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_pengumuman.php"><i class="fas fa-bullhorn me-2"></i>Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kalender.php"><i class="fas fa-calendar-alt me-2"></i>Kalender Akademik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kegiatan_akademik.php"><i class="fas fa-download me-2"></i>Kegiatan Akademik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_download.php"><i class="fas fa-download me-2"></i>Table Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_pengurusan.php"><i class="fas fa-download me-2"></i>Table Pengurusan Surat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kerjasama.php"><i class="fas fa-handshake me-2"></i>Table Kerjasama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_penghargaan_dosen.php"><i class="fas fa-award me-2"></i>Awards Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_penghargaan_maha.php"><i class="fas fa-medal me-2"></i>Awards Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kegiatan_bem.php"><i class="fas fa-newspaper me-2"></i>Kegiatan BEM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kegiatan_himasi.php"><i class="fas fa-newspaper me-2"></i>Kegiatan HIMASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kegiatan_himatesya.php"><i class="fas fa-newspaper me-2"></i>Kegiatan Himatesya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kegiatan_hmm.php"><i class="fas fa-newspaper me-2"></i>Kegiatan HMM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kurikulum_si.php"><i class="fas fa-newspaper me-2"></i>Table Kurikulum SI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kurikulum_sipil.php"><i class="fas fa-newspaper me-2"></i>Table Kurikulum Sipil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_kurikulum_mesin.php"><i class="fas fa-newspaper me-2"></i>Table Kurikulum Mesin</a>
                </li>
            </ul>
        </div>
        <div class="user-info">
            <div class="text-white mb-2">Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></div>
            <a class="btn btn-light btn-sm" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
        </div>
    </div>
    <div class="main-content">