<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaKegiatan = $_POST['nama_kegiatan'];
    $tanggalPelaksanaan = $_POST['tanggal_pelaksanaan'];
    $link = $_POST['link'];
   
    
    $sql = "INSERT INTO kegiatan_akademik (nama_kegiatan, tanggal_pelaksanaan, link) 
            VALUES ('$namaKegiatan', '$tanggalPelaksanaan', '$link')";
    $conn->query($sql);
    header("Location: view_kegiatan_akademik.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Data Kegiatan Akademik</h3>
                </div>
                <div class="card-body">
                    <form action="create_kegiatan_akademik.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Pelaksanaan</label>
                            <input type="date" name="tanggal_pelaksanaan" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">link</label>
                            <textarea name="link" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="view_kegiatan_akademik.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

