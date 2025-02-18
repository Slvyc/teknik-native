<?php
include "../db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM kegiatan_hmm WHERE id=$id");
    header ('location: view_kegiatan_hmm.php');
}
?>