<?php
include '../db.php';
include 'header.php';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron bg-primary text-white rounded shadow-lg p-5">
                <h1 class="display-4">Selamat Datang, Admin!</h1>
                <p class="lead">Panel administrasi untuk mengelola sistem</p>
                <hr class="my-4 bg-white">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-success text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h5 class="card-title">Kelola Pengguna</h5>
                    <p class="card-text">Atur dan kelola data pengguna sistem</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card bg-info text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h5 class="card-title">Pengaturan</h5>
                    <p class="card-text">Konfigurasi sistem dan preferensi</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-chart-bar fa-3x mb-3"></i>
                    <h5 class="card-title">Laporan</h5>
                    <p class="card-text">Lihat statistik dan laporan sistem</p>
                </div>
            </div>
        </div>
    </div>
</div>
