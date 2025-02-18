<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM kurikulum_sipil WHERE id=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $semester = $_POST['semester']; 
    $kodeMk = $_POST['kode_mk'];
    $mataKuliah = $_POST['mata_kuliah']; 
    $sks = $_POST['sks'];
    $praktek = $_POST['praktek'];
    $teori = $_POST['teori'];
    $kategoriMk = $_POST['kategori_mk'];  
    $rps = $_POST['rps'];

    $sql = "UPDATE kurikulum_sipil SET semester='$semester', kode_mk='$kodeMk', mata_kuliah='$mataKuliah', 
            sks='$sks', praktek='$praktek', teori='$teori', kategori_mk='$kategoriMk', rps='$rps' WHERE id=$id";
    $conn->query($sql);
     // Move the header redirection here
     header("Location: view_kurikulum_sipil.php");
     exit; // Ensure no furtkur is executed after redirection
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit Kurikulum Sipil</h3>
                </div>
                <div class="card-body">
                    <form action="edit_kurikulum_sipil.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Semester</label>
                            <input type="text" name="semester" class="form-control" value="<?php echo $row['semester']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kode Mata Kuliah</label>
                            <textarea name="kode_mk" class="form-control" rows="4" required><?php echo $row['kode_mk']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mata Kuliah</label>
                            <textarea name="mata_kuliah" class="form-control" rows="4" required><?php echo $row['mata_kuliah']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SKS</label>
                            <input type="number" name="sks" class="form-control" value="<?php echo $row['sks']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Praktek</label>
                            <input type="number" name="praktek" class="form-control" value="<?php echo $row['praktek']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teori</label>
                            <input type="number" name="teori" class="form-control" value="<?php echo $row['praktek']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori MK</label>
                            <select name="kategori_mk" class="form-control" required>
                                <option value="wajib" <?php echo ($row['kategori_mk'] == 'wajib') ? 'selected' : ''; ?>>wajib</option>
                                <option value="pilihan" <?php echo ($row['kategori_mk'] == 'pilihan') ? 'selected' : ''; ?>>pilihan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">RPS</label>
                            <textarea name="rps" class="form-control" rows="4" required><?php echo $row['rps']; ?></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="view_kurikulum_sipil.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>