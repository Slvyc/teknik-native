<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_kerjasama'])) {
    $id = $_GET['id_kerjasama'];
    $result = $conn->query("SELECT * FROM kerjasama WHERE id_kerjasama=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_kerjasama'];
    $namaKerjasama = $_POST['nama_kerjasama'];
    $lingkupKerjasama = $_POST['lingkup_kerjasama'];
    $jenisDokumen = $_POST['jenis_dokumen'];
    $statusKerjasama = $_POST['status_kerjasama'];
    $link = $_POST['link'];
    $dateKerjasama = $_POST['date'];

    $sql = "UPDATE kerjasama SET nama_kerjasama='$namaKerjasama', lingkup_kerjasama='$lingkupKerjasama', jenis_dokumen='$jenisDokumen', status_kerjasama='$statusKerjasama', link='$link', date='$dateKerjasama' 
            WHERE id_kerjasama=$id";
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
                    <h3 class="card-title mb-0">Edit Tabel Kerjasama</h3>
                </div>
                <div class="card-body">
                    <form action="edit_kerjasama.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_kerjasama" value="<?php echo $row['id_kerjasama']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama Kerjasama</label>
                            <input type="text" name="nama_kerjasama" class="form-control" value="<?php echo $row['nama_kerjasama']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Lingkup Kerjasama</label>
                            <textarea name="lingkup_kerjasama" class="form-control" rows="4" required><?php echo $row['lingkup_kerjasama']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Dokumen</label>
                            <textarea name="jenis_dokumen" class="form-control" rows="4" required><?php echo $row['jenis_dokumen']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status Kerjasama</label>
                            <textarea name="status_kerjasama" class="form-control" rows="4" required><?php echo $row['status_kerjasama']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Kerjasama</label>
                            <textarea name="link" class="form-control" rows="4" required><?php echo $row['link']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="index.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

