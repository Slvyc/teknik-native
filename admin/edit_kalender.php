<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_kalender'])) {
    $id = $_GET['id_kalender'];
    $result = $conn->query("SELECT * FROM kalender WHERE id_kalender=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_kalender'];
    $dateKalender = $_POST['date'];
    
    // Periksa jika ada file gambar baru diunggah
    if (!empty($_FILES['image_ganjil']['name']) && !empty($_FILES['image_genap']['name'])) {
        $imageGanjil = $_FILES['image_ganjil']['name'];
        $imageGenap = $_FILES['image_genap']['name'];
        $targetGanjil = "uploads/" . basename($imageGanjil);
        $targetGenap = "uploads/" . basename($imageGenap);
        move_uploaded_file($_FILES['image_ganjil']['tmp_name'], $targetGanjil);
        move_uploaded_file($_FILES['image_genap']['tmp_name'], $targetGenap);
    } else {
        $imageGanjil = $_POST['old_image_ganjil'];
        $imageGenap = $_POST['old_image_genap'];
    }

    $sql = "UPDATE kalender SET image_ganjil='$imageGanjil', image_genap='$imageGenap', date='$dateKalender' WHERE id_kalender=$id";
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
                    <h3 class="card-title mb-0">Edit Kalender Akademik</h3>
                </div>
                <div class="card-body">
                    <form action="edit_kalender.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_kalender" value="<?php echo $row['id_kalender']; ?>">
                        <input type="hidden" name="old_image_ganjil" value="<?php echo $row['image_ganjil']; ?>">
                        <input type="hidden" name="old_image_genap" value="<?php echo $row['image_genap']; ?>">

                        <div class="mb-3">
                            <!-- gambar tahun ajaran 1 -->
                            <label class="form-label">Gambar Saat Ini</label>
                            <img src="uploads/<?php echo $row['image_ganjil']; ?>" class="img-thumbnail mb-2" style="max-width: 200px">
                            <input type="file" name="image_ganjil" class="form-control" accept="image/*">
                            <!-- gambar tahun ajaran 2 -->
                            <label class="form-label">Gambar Saat Ini</label>
                            <img src="uploads/<?php echo $row['image_genap']; ?>" class="img-thumbnail mb-2" style="max-width: 200px">
                            <input type="file" name="image_genap" class="form-control" accept="image/*">
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

