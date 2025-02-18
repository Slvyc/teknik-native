<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $person = $_POST['person'];
    $prestasi = $_POST['prestasi'];
    $tingkat = $_POST['tingkat'];
    $tahun = $_POST['tahun'];
    $link = $_POST['link'];
    $datePenghargaan = $_POST['date'];

    // Upload Gambar
    $image = $_FILES['gambar_person']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['gambar_person']['tmp_name'], $target);
    
    $sql = "INSERT INTO penghargaan_dosen (gambar_person, person, prestasi, tingkat, tahun, link, date) 
            VALUES ('$image','$person', '$prestasi', '$tingkat', '$tahun', '$link', '$datePenghargaan')";
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
                    <h3 class="card-title mb-0">Tambah Penghargaan Dosen</h3>
                </div>
                <div class="card-body">
                    <form action="create_penghargaan_dosen.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Gambar Person</label>
                            <input type="file" name="gambar_person" class="form-control" accept="image/*" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Profil</label>
                            <input type="text" name="person" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Prestasi</label>
                            <input type="text" name="prestasi" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tingkat</label>
                            <input type="text" name="tingkat" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun</label>
                            <input type="text" name="tahun" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Artikel</label>
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
                            <a href="view_penghargaan_dosen.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

