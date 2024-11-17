<?php
include 'db_connection.php';
//$username = $conn->real_escape_string($_POST['username']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Hash password sebelum disimpan ke database
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Periksa apakah username sudah ada
    $check_query = "SELECT * FROM users WHERE username = '$username'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Masukkan data ke database
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$hashed_password', '$role')";

        if ($conn->query($query) === TRUE) {
            header ('location:login.php');
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }
}
?>
