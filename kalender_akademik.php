<?php
include 'db.php';
$result = $conn->query("SELECT * FROM kalender ORDER BY date DESC");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Struktur Organisasi</title>
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
        <h1 class="display-4 fw-bold fade-in">Kalender Akademik Universitas</h1>
        <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
    </div>
</section>

<!-- Struktur Organisasi Section -->
<section class="kalender-akademik-section">
    <?php while ($row = $result->fetch_assoc()): ?>
    <div class="container-kalender-akademik text-center">
        <!-- Gambar Struktur Organisasi -->
        <img src="admin/uploads/<?php echo $row['image_ganjil']; ?>" alt="Struktur Organisasi Fakultas Teknik" class="org-image-kalender">
        <!-- Download Button -->
        <div class="mt-3">
            <a href="admin/uploads/<?php echo $row['image_ganjil']; ?>" download class="btn btn-custom">
                <i class="bi bi-download"></i> Download 
            </a>`
        </div>
    </div>

    <div class="container-kalender-akademik text-center">
        <!-- Gambar Struktur Organisasi -->
        <img src="admin/uploads/<?php echo $row['image_genap']; ?>" alt="Struktur Organisasi Fakultas Teknik" class="org-image-kalender">
        <!-- Download Button -->
        <div class="mt-3">
            <a href="admin/uploads/<?php echo $row['image_genap']; ?>" download class="btn btn-custom">
                <i class="bi bi-download"></i> Download 
            </a>
        </div>
    </div>
    <?php endwhile; ?>
</section>

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
