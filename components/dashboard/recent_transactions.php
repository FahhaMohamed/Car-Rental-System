<?php

include __DIR__ . "/../../database/config.php";

$sql = "SELECT * FROM transaksi WHERE MONTH(transaksi_tgl) = MONTH(CURDATE()) AND YEAR(transaksi_tgl) = YEAR(CURDATE())";

$stmt = mysqli_query($conn, $sql);

if (!$stmt) {
    echo "Something went wrong!";
}

if ($stmt->num_rows > 0) {
    while ($row = $stmt->fetch_assoc()) {

        $status_row = ($row['transaksi_status'] == 1) ? "<i class='bi bi-check-circle-fill done'>Finished</i>" : "<i class='bi bi-check-circle-fill not-done'>Not Finished</i>";

        $sql_n = "SELECT kostumer_nama FROM kostumer WHERE kostumer_id={$row['transaksi_kostumer']}";
        $sql_c = "SELECT mobil_merk FROM mobil WHERE mobil_id={$row['transaksi_mobil']}";

        $stmt_n = mysqli_query($conn, $sql_n);
        $stmt_c = mysqli_query($conn, $sql_c);

        $customer = $stmt_n->fetch_assoc();
        $car = $stmt_c->fetch_assoc();

        echo "<tr>
                    <td>{$row['transaksi_tgl']}</td>
                    <td>{$customer['kostumer_nama']}</td>
                    <td>{$car['mobil_merk']}</td>
                    <td>{$row['transaksi_tgl_pinjam']}</td>
                    <td>{$row['transaksi_tgl_kembali']}</td>
                    <td>Rs. {$row['transaksi_harga']}</td>
                    <td>
                    {$status_row}
                    </td>
                </tr>";

    }
} else {
    echo "<center style = 'padding-top: 20px'><p class='error'>No Recent Transactions Available!</p></center>";
}