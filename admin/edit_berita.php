<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM berita WHERE id=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    
    // Periksa jika ada file gambar baru diunggah
    if (!empty($_FILES['image_news']['name'])) {
        $image = $_FILES['image_news']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['image_news']['tmp_name'], $target);
    } else {
        $image = $_POST['old_image_news'];
    }

    $sql = "UPDATE berita SET title='$title', description='$description', image_news='$image', date='$date' WHERE id=$id";
    $conn->query($sql);
    header("Location: view_berita.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit Berita</h3>
                </div>
                <div class="card-body">
                    <form action="edit_berita.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="old_image_news" value="<?php echo $row['image_news']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="4" required><?php echo $row['description']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar Saat Ini</label>
                            <img src="uploads/<?php echo $row['image_news']; ?>" class="img-thumbnail mb-2" style="max-width: 200px">
                            <input type="file" name="image_news" class="form-control" accept="image/*">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
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

