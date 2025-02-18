<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_pengumuman'])) {
    $id = $_GET['id_pengumuman'];
    $result = $conn->query("SELECT * FROM pengumuman WHERE id_pengumuman=$id");
    $row = $result->fetch_assoc();
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_pengumuman'];
    $tanggalPengumuman = $_POST['tanggal_pengumuman'];
    $bulanPengumuman = $_POST['bulan_pengumuman'];
    $judulPengumuman = $_POST['judul_pengumuman'];
    $descPengumuman = $_POST['desc_pengumuman'];
    $link = $_POST['link'];
    $datePengumuman = $_POST['date'];

    $sql = "UPDATE pengumuman SET tanggal_pengumuman='$tanggalPengumuman', bulan_pengumuman='$bulanPengumuman', judul_pengumuman='$judulPengumuman',
             desc_pengumuman='$descPengumuman', link='$link', date='$datePengumuman' WHERE id_pengumuman=$id";
    $conn->query($sql);
    header("Location: view_pengumuman.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit Pengumuman</h3>
                </div>
                <div class="card-body">
                    <form action="edit_pengumuman.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_pengumuman" value="<?php echo $row['id_pengumuman']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Tanggal Pengumuman</label>
                            <input type="number" name="tanggal_pengumuman" class="form-control" value="<?php echo $row['tanggal_pengumuman']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Pengumuman</label>
                            <textarea name="bulan_pengumuman" class="form-control" rows="4" required><?php echo $row['bulan_pengumuman']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul Pengumuman</label>
                            <textarea name="judul_pengumuman" class="form-control" rows="4" required><?php echo $row['judul_pengumuman']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi Pengumuman</label>
                            <textarea name="desc_pengumuman" class="form-control" rows="4" required><?php echo $row['desc_pengumuman']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link Pengumuman</label>
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
                            <a href="view_pengumuman.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

