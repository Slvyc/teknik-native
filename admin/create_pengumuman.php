<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tanggalPengunguman = $_POST['tanggal_pengumuman'];
    $bulanPengumuman = $_POST['bulan_pengumuman'];
    $judulPengumuman = $_POST['judul_pengumuman'];
    $descPengumuman = $_POST['desc_pengumuman'];
    $link = $_POST['link'];
    $datePengumuman = $_POST['date'];

    $sql = "INSERT INTO pengumuman (tanggal_pengumuman, bulan_pengumuman, judul_pengumuman, desc_pengumuman, link, date) 
            VALUES ('$tanggalPengunguman', '$bulanPengumuman', '$judulPengumuman', '$descPengumuman', '$link', '$datePengumuman')";
    $conn->query($sql);
    header("Location: view_pengumuman.php");
    exit;
}   
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Pengumuman</h3>
                </div>
                <div class="card-body">
                    <form action="create_pengumuman.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pengumuman</label>
                            <input type="number" name="tanggal_pengumuman" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bulan Pengumuman</label>
                            <textarea name="bulan_pengumuman" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul Pengumuman</label>
                            <textarea name="judul_pengumuman" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi Pengumuman</label>
                            <textarea name="desc_pengumuman" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Pengumuman</label>
                            <textarea name="link" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="view_pengumuman.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

