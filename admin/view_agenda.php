<?php
include '../db.php';
include 'header.php';
$result = $conn->query("SELECT * FROM agenda ORDER BY date DESC");
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Agenda</h2>
        <a href="create_agenda.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Agenda
        </a>
    </div>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>Tahun Agenda:</strong> <?php echo $row['tahun_agenda']; ?></p>
                    <h5 class="card-title"><strong>Judul Agenda : </strong><?php echo $row['judul_agenda']; ?></h5>
                    <p class="card-text"><strong>Masa Agenda:</strong> <?php echo $row['masa_agenda']; ?></p>
                    <p class="text-muted"><i class="far fa-calendar-alt"></i> <?php echo date('d F Y', strtotime($row['date'])); ?></p>
                    <div class="btn-group">
                        <a href="edit_agenda.php?id_agenda=<?php echo $row['id_agenda']; ?>" class="btn btn-warning btn-sm btn-action">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="delete_agenda.php?id_agenda=<?php echo $row['id_agenda']; ?>" class="btn btn-danger btn-sm btn-action" 
                           onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

