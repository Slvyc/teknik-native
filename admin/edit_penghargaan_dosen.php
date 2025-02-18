<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_penghargaan'])) {
    $id = $_GET['id_penghargaan'];
    $result = $conn->query("SELECT * FROM penghargaan_dosen WHERE id_penghargaan=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_penghargaan'];
    $person = $_POST['person'];
    $prestasi = $_POST['prestasi'];
    $tingkat = $_POST['tingkat'];
    $tahun = $_POST['tahun'];
    $link = $_POST['link'];
    $datePenghargaan = $_POST['date'];
    
    // Periksa jika ada file gambar baru diunggah
    if (!empty($_FILES['gambar_person']['name'])) {
        $image = $_FILES['gambar_person']['name'];
        $target = "uploads/" . basename($image);
        move_uploaded_file($_FILES['gambar_person']['tmp_name'], $target);
    } else {
        $image = $_POST['old_gambar_person'];
    }

    $sql = "UPDATE penghargaan_dosen SET gambar_person='$image', person='$person', prestasi='$prestasi', tingkat='$tingkat', tahun='$tahun', link='$link', date='$datePenghargaan' 
            WHERE id_penghargaan=$id";
    $conn->query($sql);
    header("Location: view_penghargaan_dosen.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit Penghargaan Dosen</h3>
                </div>
                <div class="card-body">
                    <form action="edit_penghargaan_dosen.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_penghargaan" value="<?php echo $row['id_penghargaan']; ?>">
                        <input type="hidden" name="old_gambar_person" value="<?php echo $row['gambar_person']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Gambar Person Saat Ini</label>
                            <img src="uploads/<?php echo $row['gambar_person']; ?>" class="img-thumbnail mb-2" style="max-width: 200px">
                            <input type="file" name="gambar_person" class="form-control" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Profil</label>
                            <input type="text" name="person" class="form-control" value="<?php echo $row['person']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Prestasi</label>
                            <textarea name="prestasi" class="form-control" rows="4" required><?php echo $row['prestasi']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tingkat</label>
                            <textarea name="tingkat" class="form-control" rows="4" required><?php echo $row['tingkat']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun</label>
                            <textarea name="tahun" class="form-control" rows="4" required><?php echo $row['tahun']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link</label>
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

