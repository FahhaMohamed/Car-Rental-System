<?php
include __DIR__ . "/../../database/config.php";



$sql = "SELECT * FROM kostumer";

$stmt = mysqli_query($conn, $sql);

if (!$stmt) {
    echo "<center>Something went wrong</center>";
}

if ($stmt->num_rows > 0) {

    $i = 0;

    while ($row = $stmt->fetch_assoc()) {

        $i++;

        echo "
            <tr>
    <td>{$i}</td>
    <td>{$row['kostumer_nama']}</td>
    <td>{$row['kostumer_jk']}</td>
    <td>{$row['kostumer_hp']}</td>
    <td>{$row['kostumer_ktp']}</td>
    <td>{$row['kostumer_alamat']}</td>
    <td class='action'>
        <i class='bi bi-pencil-square done'></i>
        <i class='bi bi-trash3-fill not-done'></i>
    </td>
</tr>
        ";
    }
} else {
    echo "<center style = 'padding-top: 20px'><p class='error'>No Customers Available!</p></center>";
}

