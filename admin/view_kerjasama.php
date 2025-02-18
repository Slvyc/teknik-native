<?php
include '../db.php';
include 'header.php';

// Query to get download data
$query = "SELECT * FROM kerjasama ORDER BY date DESC";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Kerjasama</h2>
        <a href="create_kerjasama.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">No</th>
                            <th width="35%">Kerjasama</th>
                            <th width="20%">Lingkup Kerjasama</th>
                            <th width="20%">Jenis Dokumen</th>
                            <th width="20%">Tanggal</th>
                            <th width="20%">Status</th>
                            <th width="20%">Link Download</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['nama_kerjasama']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['lingkup_kerjasama']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['jenis_dokumen']) . "</td>";
                            echo "<td>" . date('d-m-Y', strtotime($row['date'])) . "</td>";
                            echo "<td>" . htmlspecialchars($row['status_kerjasama']) . "</td>";
                            echo "<td><a href='" . htmlspecialchars($row['link']) . "' target='_blank' class='btn btn-sm btn-success'>Download</a></td>";
                            echo "<td class='text-center'>
                                    <a href='edit_kerjasama.php?id_kerjasama=" . $row['id_kerjasama'] . "' class='btn btn-sm btn-warning btn-action'><i class='fas fa-edit'></i></a>
                                    <a href='delete_kerjasama.php?id_kerjasama=" . $row['id_kerjasama'] . "' class='btn btn-sm btn-danger btn-action' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fas fa-trash'></i></a>
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
