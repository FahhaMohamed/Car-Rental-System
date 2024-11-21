<?php
include __DIR__ . "/../../database/config.php";

$sql = "SELECT * FROM mobil";

$stmt = mysqli_query($conn, $sql);

if (!$stmt) {
    echo "<center>Something went wrong!</center>";
}

if ($stmt->num_rows > 0) {
    $i = 0;
    while ($row = $stmt->fetch_assoc()) {

        $i++;

        $status = ($row['mobil_status'] == 1) ? 'Available' : 'Not Available';
        $color = ($row['mobil_status'] == 1) ? 'done' : 'not-done';

        echo "
                                <tr>
                    <td>{$i}</td>
                    <td>{$row['mobil_merk']}</td>
                    <td>{$row['mobil_plat']}</td>
                    <td>{$row['mobil_warna']}</td>
                    <td>{$row['mobil_tahun']}</td>
                    <td class='$color'>{$status}</td>
                    <td class='action'>
                        <i class='bi bi-pencil-square done'></i>
                        <i class='bi bi-trash3-fill not-done'></i>
                    </td>
                </tr>
                            ";
    }
} else {
    echo "<center style = 'padding-top: 20px'><p class='error'>No Cars Available!</p></center>";
}
