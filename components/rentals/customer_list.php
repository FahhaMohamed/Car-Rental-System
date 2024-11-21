<?php
include __DIR__ . "/../../database/config.php";

$sql = "SELECT * FROM kostumer";

$stmt = mysqli_query($conn, $sql);

if($stmt->num_rows>0) {
    while ($row = $stmt->fetch_assoc()) {
        echo "<option value='{$row['kostumer_id']}'>{$row['kostumer_nama']}</option>";
    }
} else {
    echo "<option value=''>No Customers Available</option>";
}