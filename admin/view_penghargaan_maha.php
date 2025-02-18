<?php
include '../db.php';
include 'header.php';

// Query to get download data
$query = "SELECT * FROM penghargaan_mahasiswa ORDER BY date DESC";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Penghargaan Mahasiswa</h2>
        <a href="create_penghargaan_maha.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">No</th>
                            <th width="35%">Profil</th>
                            <th width="20%">Prestasi</th>
                            <th width="20%">Tingkat</th>
                            <th width="20%">Tahun</th>
                            <th width="20%">Link</th>
                            <th width="20%">Tanggal</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>
                                <div>" . htmlspecialchars($row['person']) . "</div>
                                <img src='uploads/" . $row['gambar_person'] . "' alt='" . htmlspecialchars($row['person']) . "' style='max-width: 100px; height: auto;'>
                            </td>";
                            echo "<td>" . htmlspecialchars($row['prestasi']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['tingkat']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['tahun']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['link']) . "</td>";
                            echo "<td>" . date('d-m-Y', strtotime($row['date'])) . "</td>";
                            echo "<td class='text-center'>
                                    <a href='edit_penghargaan_maha.php?id_penghargaan=" . $row['id_penghargaan'] . "' class='btn btn-sm btn-warning btn-action'><i class='fas fa-edit'></i></a>
                                    <a href='delete_penghargaan_maha.php?id_penghargaan=" . $row['id_penghargaan'] . "' class='btn btn-sm btn-danger btn-action' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fas fa-trash'></i></a>
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
