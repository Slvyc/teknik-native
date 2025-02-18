<?php
include '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM berita WHERE id=$id");
    header("Location: view_berita.php");
}
?>
