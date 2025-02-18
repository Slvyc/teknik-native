<?php
include '../db.php';

if (isset($_GET['id_agenda'])) {
    $id = $_GET['id_agenda'];
    if ($conn->query("DELETE FROM agenda WHERE id_agenda=$id")) {
        echo "<script>alert('Sukses: Agenda berhasil dihapus.'); window.location.href='view_agenda.php';</script>";
    } else {
        echo "<script>alert('Gagal: Agenda tidak dapat dihapus.'); window.location.href='view_agenda.php';</script>";
    }
}
?>
