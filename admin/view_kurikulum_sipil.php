<?php
include '../db.php';
include 'header.php';

// Query to get download data
$query = "SELECT * FROM kurikulum_sipil";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Kurikulum Sipil</h2>
        <!-- <a href="create_kurikulum_si.php" class="btn btn-primary">Tambah Kurikulum Sipil</a> -->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">No</th>
                            <th width="5%">Semester</th>
							<th width="10%">Kode MK</th>
							<th width="20%">Mata Kuliah</th>
							<th width="5%">SKS</th>
							<th width="5%">Praktek</th>
							<th width="5%">Teori</th>
                            <th width="10%">Kategori Mata Kuliah</th>
                            <th width="10%">RPS</th>
                            <th width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['kode_mk']) . "</td>";
							echo "<td>" . htmlspecialchars($row['mata_kuliah']) . "</td>";
							echo "<td>" . htmlspecialchars($row['sks']) . "</td>";
							echo "<td>" . htmlspecialchars($row['praktek']) . "</td>";
							echo "<td>" . htmlspecialchars($row['teori']) . "</td>";
							echo "<td>" . htmlspecialchars($row['kategori_mk']) . "</td>";
                            echo "<td><a href='" . htmlspecialchars($row['rps']) . "' target='_blank' class='btn btn-sm btn-success'>Download</a></td>";
                            echo "<td class='text-center'>
                                    <a href='edit_kurikulum_sipil.php?id=" . $row['id'] . "' class='btn btn-sm btn-warning btn-action'><i class='fas fa-edit'></i></a>
                                    <a href='delete_kurikulum_sipil.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger btn-action' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fas fa-trash'></i></a>
                                  </td>";
                            echo "</tr>";
                        }
						
                        if (mysqli_num_rows($result) == 0) {
                            echo "<tr><td colspan='10' class='text-center'>Tidak ada data</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
