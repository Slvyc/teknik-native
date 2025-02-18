<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM kegiatan_akademik WHERE id=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $namaKegiatan = $_POST['nama_kegiatan'];
    $tanggalPelaksanaan = $_POST['tanggal_pelaksanaan'];
    $link = $_POST['link'];

    $sql = "UPDATE kegiatan_akademik SET nama_kegiatan='$namaKegiatan', tanggal_pelaksanaan='$tanggalPelaksanaan', link='$link' WHERE id=$id";
    $conn->query($sql);
     // Move the header redirection here
     header("Location: view_kegiatan_akademik.php");
     exit; // Ensure no further code is executed after redirection
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit File Kegiatan Akademik</h3>
                </div>
                <div class="card-body">
                    <form action="edit_kegiatan_akademik.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo $row['nama_kegiatan']; ?>" required>
                        </div>
   
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pelaksanaan</label>
                            <input type="date" name="tanggal_pelaksanaan" class="form-control" value="<?php echo $row['tanggal_pelaksanaan']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link File</label>
                            <textarea name="link" class="form-control" rows="4" required><?php echo $row['link']; ?></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="view_kegiatan_akademik.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

