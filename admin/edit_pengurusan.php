<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_pengurusan'])) {
    $id = $_GET['id_pengurusan'];
    $result = $conn->query("SELECT * FROM pengurusan_surat WHERE id_pengurusan=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_pengurusan'];
    $pengurusanSurat = $_POST['pengurusan_surat'];
    $link = $_POST['link'];
    $datePengurusan = $_POST['date'];

    $sql = "UPDATE pengurusan_surat SET pengurusan_surat='$pengurusanSurat', link='$link', date='$datePengurusan' WHERE id_pengurusan=$id";
    $conn->query($sql);
     // Move the header redirection here
     header("Location: view_pengurusan.php");
     exit; // Ensure no further code is executed after redirection
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit Pengurusan Surat</h3>
                </div>
                <div class="card-body">
                    <form action="edit_pengurusan.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_pengurusan" value="<?php echo $row['id_pengurusan']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Pengurusan Surat</label>
                            <input type="text" name="pengurusan_surat" class="form-control" value="<?php echo $row['pengurusan_surat']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Pengurusan</label>
                            <textarea name="link" class="form-control" rows="4" required><?php echo $row['link']; ?></textarea>
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

