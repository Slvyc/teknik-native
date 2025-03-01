<?php
include 'db.php';

// Pagination setup
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Ambil total data
$total_result = $conn->query("SELECT COUNT(*) AS total FROM kerjasama");
$total_row = $total_result->fetch_assoc();
$total_pages = ceil($total_row['total'] / $limit);

// Ambil data dengan pagination
$result = $conn->query("SELECT * FROM kerjasama ORDER BY date DESC LIMIT $start, $limit");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kerjasama</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
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


</head>

<body class="body-kerjasama">
<!-- navbar -->
<?php
include('navbar.php');
?>
<!-- end navbar -->

<!-- Hero Section --> 
<section class="hero">
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Kerja Sama Fakultas Teknik</h1>
        <p class="lead">Membangun Masa Depan Bersama</p>
    </div>
</section>

<!-- main content -->
<!-- Konten Kerja Sama -->
<div class="container table-container mt-3 mb-5">
    <div class="table-responsive">
      <table class="table table-hover mt-5 mb-5">
        <thead>
          <tr>
            <th>No</th>
            <th>Kerjasama</th>
            <th>Lingkup Kerjasama</th>
            <th>Jenis Dokumen</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                  echo "<td data-label='No'>" . $no++ . "</td>";
                  echo "<td data-label='Kerjasama'>" . htmlspecialchars($row['nama_kerjasama']) . "</td>";
                  echo "<td data-label='Lingkup Kerjasama'>" . htmlspecialchars($row['lingkup_kerjasama']) . "</td>";
                  echo "<td data-label='Jenis Dokumen'>" . htmlspecialchars($row['jenis_dokumen']) . "</td>";
                  echo "<td data-label='Tanggal'>" . date('d-m-Y', strtotime($row['date'])) . "</td>";
                  echo "<td data-label='Status'>" . htmlspecialchars($row['status_kerjasama']) . "</td>";
                  echo "<td data-label='Aksi'><a href='" . htmlspecialchars($row['link']) . "' target='_blank' class='btn-primary btn-sm text-decoration-underline'> <i class='fas fa-download'></i> Download</a></td>";
            }

            if (mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
            }
            ?>    
        </tbody>
      </table>
      <!-- Pagination -->
    <div class="pagination-container">
        <ul class="pagination justify-content-end">
            <?php if ($page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=1"><i class="fas fa-angle-double-left"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $page - 1 ?>"><i class="fas fa-angle-left"></i></a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $page + 1 ?>"><i class="fas fa-angle-right"></i></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $total_pages ?>"><i class="fas fa-angle-double-right"></i></a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
  </div>   
</div>
</div>
<!-- end content -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->

<!-- library javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

    
<!-- template javascript -->
<script src="js/main.js"></script>

</body>
</html>