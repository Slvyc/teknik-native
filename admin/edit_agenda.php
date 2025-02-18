<?php
ob_start();
include '../db.php';
include 'header.php';

if (isset($_GET['id_agenda'])) {
    $id = $_GET['id_agenda'];
    $result = $conn->query("SELECT * FROM agenda WHERE id_agenda=$id");
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_agenda'];
    $tahunAgenda = $_POST['tahun_agenda'];
    $judulAgenda = $_POST['judul_agenda'];
    $masaAgenda = $_POST['masa_agenda'];
    $date = $_POST['date'];

    $sql = "UPDATE agenda SET tahun_agenda='$tahunAgenda', judul_agenda='$judulAgenda', masa_agenda='$masaAgenda', date='$date' WHERE id_agenda=$id";
    $conn->query($sql);
    header("Location: view_agenda.php");
    exit;
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">Edit agenda</h3>
                </div>
                <div class="card-body">
                    <form action="edit_agenda.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_agenda" value="<?php echo $row['id_agenda']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Tahun Agenda</label>
                            <input type="text" name="tahun_agenda" class="form-control" value="<?php echo $row['tahun_agenda']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul Agenda</label>
                            <textarea name="judul_agenda" class="form-control" rows="4" required><?php echo $row['judul_agenda']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Masa Agenda</label>
                            <textarea name="masa_agenda" class="form-control" rows="4" required><?php echo $row['masa_agenda']; ?></textarea>
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

