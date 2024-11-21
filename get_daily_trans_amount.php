<?php

include __DIR__ . "/database/config.php";

header('Content-Type: application/json');


// $sql = "SELECT MONTH(transaksi_tgl) AS month, SUM(transaksi_harga) AS total
//         FROM transaksi
//         GROUP BY MONTH(transaksi_tgl)
//         ORDER BY MONTH(transaksi_tgl)";

$sql = "SELECT transaksi_tgl, SUM(transaksi_harga) as total
        FROM transaksi
        GROUP BY DAY(transaksi_tgl)
        ORDER BY DAY(transaksi_tgl)";

$stmt = mysqli_query($conn, $sql);


$transactionData = [];

if ($stmt) {

    while ($row = mysqli_fetch_assoc($stmt)) {
        $transactionData[] = [
            'date' => $row['transaksi_tgl'],
            'total' => $row['total']
        ];
    }

    echo json_encode($transactionData);
} else {

    echo json_encode(['error' => 'Database query failed: ' . mysqli_error($conn)]);
}


mysqli_close($conn);

