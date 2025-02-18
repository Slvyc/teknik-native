<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_download'])) {
    $id = $_GET['id_download'];
    $result = $conn->query("SELECT * FROM download WHERE id_download=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_download'];
    $namaFile = $_POST['nama_file'];
    $link = $_POST['link'];
    $dateDownload = $_POST['date'];

    $sql = "UPDATE download SET nama_file='$namaFile', link='$link', date='$dateDownload' WHERE id_download=$id";
    $conn->query($sql);
     // Move the header redirection here
     header("Location: view_download.php");
     exit; // Ensure no further code is executed after redirection
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit File Download</h3>
                </div>
                <div class="card-body">
                    <form action="edit_download.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_download" value="<?php echo $row['id_download']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama File</label>
                            <input type="text" name="nama_file" class="form-control" value="<?php echo $row['nama_file']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link File</label>
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

