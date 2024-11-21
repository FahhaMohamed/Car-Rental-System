<?php
include __DIR__ . "/../../database/config.php";

$sql = "SELECT * FROM mobil";

$stmt = mysqli_query($conn, $sql);

if($stmt->num_rows>0) {
    while ($row = $stmt->fetch_assoc()) {
        echo "<option value='{$row['mobil_id']}'>{$row['mobil_merk']}</option>";
    }
} else {
    echo "<option value=''>No Cars Available</option>";
}