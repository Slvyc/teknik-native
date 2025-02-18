<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($conn->query("DELETE FROM kegiatan_akademik WHERE id=$id")) {
        echo "<script>alert('Sukses: file kegiatan akademik berhasil dihapus.'); window.location.href='view_kegiatan_akademik.php';</script>";
    } else {
        echo "<script>alert('Gagal: file kegiatan akademik tidak dapat dihapus.'); window.location.href='view_kegiatan_akademik.php';</script>";
    }
}
?>
