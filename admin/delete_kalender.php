<?php
include '../db.php';

if (isset($_GET['id_kalender'])) {
    $id = $_GET['id_kalender'];
    if ($conn->query("DELETE FROM kalender WHERE id_kalender=$id")) {
        echo "<script>alert('Sukses: Kalender berhasil dihapus.'); window.location.href='view_kalender.php';</script>";
    } else {
        echo "<script>alert('Gagal: Kalender tidak dapat dihapus.'); window.location.href='view_kalender.php';</script>";
    }
}
?>
