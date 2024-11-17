<?php
session_start();
if ($_SESSION['role'] !== 'Kasir') {
    header("Location: index.php");
    exit;
}
?>
<h1>Dashboard Kasir</h1>
<form action="process_transaction.php" method="POST">
    <label>Pesanan:</label>
    <input type="text" name="pesanan" required>
    <label>Metode Pembayaran:</label>
    <select name="payment_method">
        <option value="cash">Tunai</option>
        <option value="debit">Debit</option>
        <option value="qris">QRIS</option>
        <option value="transfer">Transfer</option>
    </select>
    <button type="submit">Proses Transaksi</button>
</form>
<a href="logout.php">Logout</a>
