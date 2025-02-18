<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dateKalender = $_POST['date'];
    
    // Upload Gambar
    $imageGanjil = $_FILES['image_ganjil']['name'];
    $imageGenap = $_FILES['image_genap']['name']; 
    $targetGanjil = "uploads/" . basename($imageGanjil);
    $targetGenap = "uploads/" . basename($imageGenap);
    move_uploaded_file($_FILES['image_ganjil']['tmp_name'], $targetGanjil);
    move_uploaded_file($_FILES['image_genap']['tmp_name'], $targetGenap);

    $sql = "INSERT INTO kalender (image_ganjil, image_genap, date) VALUES ('$imageGanjil', '$imageGenap', '$dateKalender')";
    $conn->query($sql);
    header("Location: view_kalender.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah Kalender</h3>
                </div>
                <div class="card-body">
                    <form action="create_kalender.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Gambar Kalender Tahun Ajaran 1</label>
                            <input type="file" name="image_ganjil" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar Kalender Tahun Ajaran 2</label>
                            <input type="file" name="image_genap" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="view_kalender.php" class="btn btn-secondary">
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
