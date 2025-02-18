<?php
include '../db.php';
include 'header.php';
$result = $conn->query("SELECT * FROM kegiatan_hmm ORDER BY date DESC");
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Kegiatan HMM</h2>
        <a href="create_kegiatan_hmm.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Kegiatan HMM
        </a>
    </div>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="uploads/<?php echo $row['image_hmm']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo substr($row['description'], 0, 100) . '...'; ?></p>
                    <p class="text-muted"><i class="far fa-calendar-alt"></i> <?php echo date('d F Y', strtotime($row['date'])); ?></p>
                    <div class="btn-group">
                        <a href="edit_kegiatan_hmm.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm btn-action">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="delete_kegiatan_hmm.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm btn-action" 
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

