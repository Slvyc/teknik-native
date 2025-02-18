<?php
include '../db.php';

if (isset($_GET['id_kerjasama'])) {
    $id = $_GET['id_kerjasama'];
    if ($conn->query("DELETE FROM kerjasama WHERE id_kerjasama=$id")) {
        echo "<script>alert('Sukses: Kerjasama berhasil dihapus.'); window.location.href='view_kerjasama.php';</script>";
    } else {
        echo "<script>alert('Gagal: kerjasama tidak dapat dihapus.'); window.location.href='view_kerjasama.php';</script>";
    }
}
?>
