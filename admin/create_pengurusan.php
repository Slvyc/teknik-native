<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pengurusanSurat = $_POST['pengurusan_surat'];
    $link = $_POST['link'];
    $datePengurusan = $_POST['date'];
    
    $sql = "INSERT INTO pengurusan_surat (pengurusan_surat, link, date) VALUES ('$pengurusanSurat', '$link', '$datePengurusan')";
    $conn->query($sql);
    header("Location: view_pengurusan.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Pengurusan Surat</h3>
                </div>
                <div class="card-body">
                    <form action="create_pengurusan.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Pengurusan Surat</label>
                            <input type="text" name="pengurusan_surat" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">link</label>
                            <textarea name="link" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="view_pengurusan.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

