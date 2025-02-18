<?php
include '../db.php';

if (isset($_GET['id_pengurusan'])) {
    $id = $_GET['id_pengurusan'];
    if ($conn->query("DELETE FROM pengurusan_surat WHERE id_pengurusan=$id")) {
        echo "<script>alert('Sukses: Pengurusan Surat berhasil dihapus.'); window.location.href='view_pengurusan.php';</script>";
    } else {
        echo "<script>alert('Gagal: Pengurusan Surat tidak dapat dihapus.'); window.location.href='view_pengurusan.php';</script>";
    }
}
?>
