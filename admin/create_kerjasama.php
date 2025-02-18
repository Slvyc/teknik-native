<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaKerjasama = $_POST['nama_kerjasama'];
    $lingkupKerjasama = $_POST['lingkup_kerjasama'];
    $jenisDokumen = $_POST['jenis_dokumen'];
    $statusKerjasama = $_POST['status_kerjasama'];
    $link = $_POST['link'];
    $dateKerjasama = $_POST['date'];
    
    $sql = "INSERT INTO kerjasama (nama_kerjasama, lingkup_kerjasama, jenis_dokumen, status_kerjasama, link, date) 
            VALUES ('$namaKerjasama', '$lingkupKerjasama', '$jenisDokumen', '$statusKerjasama', '$link', '$dateKerjasama')";
    $conn->query($sql);
    header("Location: view_kerjasama.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Kerjasama</h3>
                </div>
                <div class="card-body">
                    <form action="create_kerjasama.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Kerjasama</label>
                            <input type="text" name="nama_kerjasama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lingkup Kerjasama</label>
                            <input type="text" name="lingkup_kerjasama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Dokumen</label>
                            <input type="text" name="jenis_dokumen" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" name="status_kerjasama" class="form-control" required>
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
                            <a href="view_kerjasama.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

