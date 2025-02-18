<?php
include '../db.php';
include 'header.php';

// Query to get download data
$query = "SELECT * FROM kegiatan_akademik ORDER BY tanggal_pelaksanaan DESC";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Table Kegiatan Akademik</h2>
        <a href="create_kegiatan_akademik.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">No</th>
                            <th width="35%">Nama Kegiatan</th>
                            <th width="20%">Tanggal Pelaksanaan</th>
                            <th width="20%">Link</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_kegiatan']) . "</td>";
                            echo "<td>" . date('d-m-Y', strtotime($row['tanggal_pelaksanaan'])) . "</td>";
                            echo "<td><a href='" . htmlspecialchars($row['link']) . "' target='_blank' class='btn btn-sm btn-success'>Download</a></td>";
                            echo "<td class='text-center'>
                                    <a href='edit_kegiatan_akademik.php?id=" . $row['id'] . "' class='btn btn-sm btn-warning btn-action'><i class='fas fa-edit'></i></a>
                                    <a href='delete_kegiatan_akademik.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger btn-action' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fas fa-trash'></i></a>
                                  </td>";
                            echo "</tr>";
                        }

                        if (mysqli_num_rows($result) == 0) {
                            echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
