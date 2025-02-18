<?php
include '../db.php';
include 'header.php';
$result = $conn->query("SELECT * FROM pengumuman ORDER BY date DESC");
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Pengumuman</h2>
        <a href="create_pengumuman.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pengumuman
        </a>
    </div>

    <div class="row">
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>Tanggal Pengumuman : </strong> <?php echo $row['tanggal_pengumuman']; ?></p>
                    <h5 class="card-title"><strong>Bulan Pengumuman : </strong><?php echo $row['bulan_pengumuman']; ?></h5>
                    <p class="card-text"><strong>Judul Pengumuman : </strong> <?php echo $row['judul_pengumuman']; ?></p>
                    <p class="card-text"><strong>Deskripsi Pengumuman : </strong> <?php echo $row['desc_pengumuman']; ?></p>
                    <p class="card-text"><strong>Link Pengumuman : </strong> <?php echo $row['link']; ?></p>
                    <p class="text-muted"><i class="far fa-calendar-alt"></i> <?php echo date('d F Y', strtotime($row['date'])); ?></p>
                    <div class="btn-group">
                        <a href="edit_pengumuman.php?id_pengumuman=<?php echo $row['id_pengumuman']; ?>" class="btn btn-warning btn-sm btn-action">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="delete_pengumuman.php?id_pengumuman=<?php echo $row['id_pengumuman']; ?>" class="btn btn-danger btn-sm btn-action" 
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

