<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    
    // Upload Gambar
    $image = $_FILES['image_news']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image_news']['tmp_name'], $target);

    $sql = "INSERT INTO kegiatan_bem (title, description, image_news, date) VALUES ('$title', '$description', '$image', '$date')";
    $conn->query($sql);
    header("Location: view_kegiatan_bem.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Kegiatan BEM</h3>
                </div>
                <div class="card-body">
                    <form action="create_kegiatan_bem.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="image_news" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="view_kegiatan_bem.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

