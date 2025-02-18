<?php
include '../db.php';
include 'header.php';
$result = $conn->query("SELECT * FROM kalender ORDER BY date DESC");
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Kalender Akademik</h2>
        <a href="create_kalender.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Kalender
        </a>
    </div>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
            <div class="card">
                <?php
                $imageGanjilPath = "uploads/" . $row['image_ganjil'];
                $imageGenapPath = "uploads/" . $row['image_genap'];
                if (file_exists($imageGanjilPath)) {
                    echo '<img src="' . $imageGanjilPath . '" class="card-img-top" style="height: 200px; object-fit: cover;">';
                } else {
                    echo '<p>Image Ganjil not found: ' . $imageGanjilPath . '</p>';
                }
                if (file_exists($imageGenapPath)) {
                    echo '<img src="' . $imageGenapPath . '" class="card-img-top" style="height: 200px; object-fit: cover;">';
                } else {
                    echo '<p>Image Genap not found: ' . $imageGenapPath . '</p>';
                }
                ?>
                <div class="card-body">
                    <p class="text-muted"><i class="far fa-calendar-alt"></i> <?php echo date('d F Y', strtotime($row['date'])); ?></p>
                    <div class="btn-group">
                        <a href="edit_kalender.php?id_kalender=<?php echo $row['id_kalender']; ?>" class="btn btn-warning btn-sm btn-action">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="delete_kalender.php?id_kalender=<?php echo $row['id_kalender']; ?>" class="btn btn-danger btn-sm btn-action" 
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

