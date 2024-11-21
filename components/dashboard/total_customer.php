<?php
include __DIR__ . "/../../database/config.php";

$sql = "SELECT * FROM kostumer";
$stmt = mysqli_query($conn, $sql);

echo "<h3>{$stmt->num_rows}</h3>";