<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM kegiatan_himasi WHERE id=$id");
    header("Location: view_kegiatan_himasi.php");
}
?>
