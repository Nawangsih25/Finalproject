<?php
session_start();
if ($_SESSION['role'] !== 'Admin') {
    header("Location: index.php");
    exit;
}
?>
<h1>Dashboard Admin</h1>
<ul>
    <li><a href="manage_menu.php">Kelola Menu</a></li>
    <li><a href="manage_users.php">Kelola Pegawai</a></li>
    <li><a href="reports.php">Laporan Pendapatan</a></li>
</ul>
<a href="logout.php">Logout</a>
