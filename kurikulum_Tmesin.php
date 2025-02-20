<?php
include 'db.php';
$result = $conn->query("SELECT * FROM kurikulum_mesin");

// Array untuk menyimpan total SKS per semester
$total_sks_per_semester = [];

// Mengambil data dari database
while ($row = mysqli_fetch_assoc($result)) {
    $semester = $row['semester'];
    $sks = (int)$row['sks']; // Pastikan SKS diubah menjadi integer

    // Tambahkan SKS ke total SKS untuk semester yang sesuai
    if (!isset($total_sks_per_semester[$semester])) {
        $total_sks_per_semester[$semester] = 0;
    }
    $total_sks_per_semester[$semester] += $sks;
}

// Reset pointer hasil query untuk menampilkan data
$result->data_seek(0);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fakultas Teknik</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- caraousel bootstrap -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Swiper.js JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
 </head>
<body>
<!-- navbar -->
<?php
include('navbar.php');
?>
<!-- end navbar -->

<!-- Hero Section --> 
<section class="kurikulum-hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kurikulum S-1 Teknik Mesin</h1>
        <p class="lead">Fakultas Teknik Universitas Abulyatama</p>
    </div>
</section>

<h1 class="kurikulum-h1">Akademik S-1 Teknik Mesin</h1>
        <!-- Semester 1 -->
        <div class="kurikulum-card">
            <div class="kurikulum-table-wrapper">
                <table class="kurikulum-table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>SEMESTER</th>
                            <th>KODE MK</th>
                            <th>MATA KULIAH</th>
                            <th>SKS</th>
                            <th>TEORI</th>
                            <th>PRAKTEK</th>
                            <th>KERJA MK</th>
                            <th>RPS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $current_semester = null; // Variabel untuk menyimpan semester saat ini
                        $total_keseluruhan_sks = 0; // Variabel untuk menyimpan total keseluruhan SKS

                        while ($row = mysqli_fetch_assoc($result)) {
                            // Jika semester berubah, tampilkan total SKS untuk semester sebelumnya
                            if ($current_semester !== $row['semester'] && $current_semester !== null) {
                                echo "<tr class='total-sks'>";
                                echo "<td colspan='4'>Jumlah SKS Semester " . htmlspecialchars($current_semester) . "</td>";
                                echo "<td>" . $total_sks_per_semester[$current_semester] . "</td>";
                                echo "<td colspan='4'></td>";
                                echo "</tr>";
                            }

                            // Tampilkan data mata kuliah
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . htmlspecialchars($row['semester']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['kode_mk']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['mata_kuliah']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['sks']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['praktek']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['teori']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['kategori_mk']) . "</td>";
                            echo "<td><a href='" . htmlspecialchars($row['rps']) . "' target='_blank' class='btn'><i class='fas fa-download'></i>Download</a></td>";
                            echo "</tr>";

                            // Tambahkan SKS ke total keseluruhan
                            $total_keseluruhan_sks += (int)$row['sks'];

                            // Update semester saat ini
                            $current_semester = $row['semester'];
                        }

                        // Tampilkan total SKS untuk semester terakhir
                        if ($current_semester !== null) {
                            echo "<tr class='total-sks'>";
                            echo "<td colspan='4'>Jumlah SKS Semester " . htmlspecialchars($current_semester) . "</td>";
                            echo "<td>" . $total_sks_per_semester[$current_semester] . "</td>";
                            echo "<td colspan='4'></td>";
                            echo "</tr>";
                        }
                        ?>
                        <!-- Tampilkan total keseluruhan SKS -->
                        <tr class='total-sks'>
                            <td colspan='4'>Total Keseluruhan SKS</td>
                            <td><?php echo $total_keseluruhan_sks; ?></td>
                            <td colspan='4'></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
