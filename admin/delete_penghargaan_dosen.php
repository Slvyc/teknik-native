<?php
include '../db.php';

if (isset($_GET['id_penghargaan'])) {
    $id = $_GET['id_penghargaan'];
    if ($conn->query("DELETE FROM penghargaan_dosen WHERE id_penghargaan=$id")) {
        echo "<script>alert('Sukses: Penghargaan berhasil dihapus.'); window.location.href='view_penghargaan_dosen.php';</script>";
    } else {
        echo "<script>alert('Gagal: Penghargaan tidak dapat dihapus.'); window.location.href='view_penghargaan_dosen.php';</script>";
    }
}
?>
