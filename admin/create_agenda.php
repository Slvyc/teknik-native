<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tahunAgenda = $_POST['tahun_agenda'];
    $judulAgenda = $_POST['judul_agenda'];
    $masaAgenda = $_POST['masa_agenda'];
    $dateAgenda = $_POST['date'];

    $sql = "INSERT INTO agenda (tahun_agenda, judul_agenda, masa_agenda, date) VALUES ('$tahunAgenda', '$judulAgenda', '$masaAgenda', '$dateAgenda')";
    $conn->query($sql);
    header("Location: view_agenda.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Agenda</h3>
                </div>
                <div class="card-body">
                    <form action="create_agenda.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Tahun</label>
                            <input type="text" name="tahun_agenda" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <textarea name="judul_agenda" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Masa Agenda</label>
                            <textarea name="masa_agenda" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="view_berita.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
