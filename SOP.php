<?php
include 'db.php';
$result = $conn->query("SELECT * FROM download ORDER BY date DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downloads</title>
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

<body>
<!-- navbar -->
<?php
include('navbar.php');
?>
<!-- end navbar -->

<!-- Hero Section -->
<section class="hero">
        <div class="container-hero text-center">
            <h1 class="display-4 fw-bold fade-in">SOP/Panduan</h1>
            <p class="lead fade-in">Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<section class="download-content py-5">
    <div class="container">
        <!-- Search Box -->
        <div class="download-search-wrapper mb-4 d-flex justify-content-end">
            <div class="download-search-box">
                <div class="input-group" style="width: 300px;">
                    <input type="text" class="form-control download-search-input" id="downloadSearchInput" placeholder="Cari">
                    <span class="input-group-text download-search-icon">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="download-table-wrapper table-responsive">
            <table class="download-table table table-hover" id="sop-download-table">
                <thead class="download-table-header table-dark">
                    <tr>
                        <th class="download-col-no">NO</th>
                        <th class="download-col-name">NAMA</th>
                        <th class="download-col-date">TANGGAL DIKELUARKAN</th>
                        <th class="download-col-action">AKSI</th>
                    </tr>
                </thead>
                <tbody class="download-table-body">
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama_file']) . "</td>";
                        echo "<td>" . date('d F Y', strtotime($row['date'])). "</td>";
                        echo "<td><a href='" . htmlspecialchars($row['link']) . "' target='_blank' class='btn-primary btn-sm text-decoration-underline'><i class='fas fa-download'></i> Download</a></td>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- End Content -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->

     <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>