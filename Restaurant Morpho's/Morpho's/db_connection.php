<?php
$host = 'localhost';
$db_name = 'kasir_restoran';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $db_name);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
