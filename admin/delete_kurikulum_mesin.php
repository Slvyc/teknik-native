<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($conn->query("DELETE FROM kurikulum_mesin WHERE id=$id")) {
        echo "<script>alert('Sukses: kurikulum berhasil dihapus.'); window.location.href='view_kurikulum_mesin.php';</script>";
    } else {
        echo "<script>alert('Gagal: kurikulum tidak dapat dihapus.'); window.location.href='view_kurikulum_mesin.php';</script>";
    }
}
?>
