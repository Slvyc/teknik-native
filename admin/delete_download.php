<?php
include '../db.php';

if (isset($_GET['id_download'])) {
    $id = $_GET['id_download'];
    if ($conn->query("DELETE FROM download WHERE id_download=$id")) {
        echo "<script>alert('Sukses: file download berhasil dihapus.'); window.location.href='view_download.php';</script>";
    } else {
        echo "<script>alert('Gagal: file download tidak dapat dihapus.'); window.location.href='view_download.php';</script>";
    }
}
?>
