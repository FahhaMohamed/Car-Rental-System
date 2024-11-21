<?php
include __DIR__ . "/../../database/config.php";

$sql = "SELECT * FROM mobil";
$stmt = mysqli_query($conn, $sql);
$sql2 = "SELECT * FROM mobil WHERE mobil_status=1";
$stmt2 = mysqli_query($conn, $sql2);
echo "<h3>{$stmt2->num_rows}/{$stmt->num_rows}</h3>";