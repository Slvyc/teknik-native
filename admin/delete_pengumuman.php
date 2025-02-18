<?php
include '../db.php';

if (isset($_GET['id_pengumuman'])) {
    $id = $_GET['id_pengumuman'];
    if ($conn->query("DELETE FROM pengumuman WHERE id_pengumuman=$id")) {
        echo "<script>alert('Sukses: Pengumuman berhasil dihapus.'); window.location.href='view_pengumuman.php';</script>";
    } else {
        echo "<script>alert('Gagal: Pengumuman tidak dapat dihapus.'); window.location.href='view_pengumuman.php';</script>";
    }
}
?>
