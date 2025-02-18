<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaFile = $_POST['nama_file'];
    $link = $_POST['link'];
    $dateDownload = $_POST['date'];
    
    $sql = "INSERT INTO download (nama_file, link, date) VALUES ('$namaFile', '$link', '$dateDownload')";
    $conn->query($sql);
    header("Location: view_download.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah File Download</h3>
                </div>
                <div class="card-body">
                    <form action="create_download.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama File</label>
                            <input type="text" name="nama_file" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">link</label>
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
                            <a href="view_download.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

