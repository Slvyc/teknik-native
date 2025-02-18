<?php
include 'db.php';
$result = $conn->query("SELECT * FROM penghargaan_dosen ORDER BY date DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penghargaan</title>
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
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Teko:wght@300..700&display=swap" rel="stylesheet">
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
            <h1 class="display-4 fw-bold fade-in">Penghargaan</h1>
            <p class="lead fade-in">Fakultas Teknik Universitas Abulyatama</p>
        </div>
</section>

<!-- Content -->
<div class="award-container">
    <div class="award-card">
        <div class="award-card-header">
            Prestasi Dosen
        </div>
        <table class="award-table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Profil</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $no = 1;
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>
                            <div class="profile-container">
                                <img src="admin/uploads/<?php echo htmlspecialchars($row['gambar_person']); ?>" alt="Dosen Image" class="profile-image">
                                <div class="profile-name"><?php echo htmlspecialchars($row['person']); ?></div>
                            </div>
                        </td>
                        <td>
                            <a href="<?php echo htmlspecialchars($row['link']); ?>"><?php echo htmlspecialchars($row['prestasi']);?></a>
                        </td>
                        <td><?php echo htmlspecialchars($row['tingkat']); ?></td>
                        <td><?php echo htmlspecialchars($row['tahun']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End Content -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>