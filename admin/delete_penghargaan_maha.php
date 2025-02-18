<?php
include '../db.php';

if (isset($_GET['id_penghargaan'])) {
    $id = $_GET['id_penghargaan'];
    if ($conn->query("DELETE FROM penghargaan_mahasiswa WHERE id_penghargaan=$id")) {
        echo "<script>alert('Sukses: Penghargaan mahasiswa berhasil dihapus.'); window.location.href='view_penghargaan_maha.php';</script>";
    } else {
        echo "<script>alert('Gagal: Penghargaan mahasiswa tidak dapat dihapus.'); window.location.href='view_penghargaan_maha.php';</script>";
    }
}
?>
