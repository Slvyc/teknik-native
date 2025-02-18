<?php
$db_host = 'localhost';         // Tetap sebagai 'localhost' atau '127.0.0.1'
$db_name = 'dbadmin';     // Sesuaikan dengan nama database di server
$db_user = 'root';         // Sesuaikan dengan username di server
$db_pass = '';          // Sesuaikan dengan password di server

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}