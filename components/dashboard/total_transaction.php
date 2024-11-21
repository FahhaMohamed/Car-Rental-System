<?php
include __DIR__ . "/../../database/config.php";

$sql = "SELECT SUM(transaksi_harga) as total FROM transaksi";
$stmt = mysqli_query($conn, $sql);

$row = $stmt->fetch_assoc();

echo "<h3>Rs. {$row['total']}</h3>";