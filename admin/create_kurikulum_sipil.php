<?php
ob_start();
include '../db.php';
include 'header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $semester = $_POST['semester']; 
    $kodeMk = $_POST['kode_mk'];
    $mataKuliah = $_POST['mata_kuliah']; 
    $sks = $_POST['sks'];
    $praktek = $_POST['praktek'];
    $teori = $_POST['teori'];
    $kategoriMk = $_POST['kategori_mk'];  
    $rps = $_POST['rps'];

    $sql = "INSERT INTO kurikulum_sipil (semester, kode_mk, mata_kuliah, sks, praktek, teori, kategori_mk, rps) 
            VALUES ('$semester', '$kodeMk', '$mataKuliah', '$sks', '$praktek', '$teori', '$kategoriMk', '$rps')";
    $conn->query($sql);
    header("Location: view_kurikulum_sipil.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Tambah File Kurikulum SI</h3>
                </div>
                <div class="card-body">
                    <form action="create_kurikulum_sipil.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Semester</label>
                            <input type="text" name="semester" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kode MK</label>
                            <input type="text" name="kode_mk" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mata Kuliah</label>
                            <input type="text" name="mata_kuliah" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SKS</label>
                            <input type="number" name="sks" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Praktek</label>
                            <input type="number" name="praktek" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Teori</label>
                            <input type="number" name="teori" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori MK</label>
                            <select name="kategori_mk" class="form-control" required>
                                <option value="wajib">wajib</option>
                                <option value="pilihan">pilihan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">RPS</label>
                            <textarea name="rps" class="form-control" rows="4" required></textarea>
                        </div>


                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
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

