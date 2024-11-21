<?php
include __DIR__ . "/../../database/config.php";



$sql = "SELECT t.*, k.kostumer_nama, m.mobil_merk
        FROM transaksi t
        JOIN kostumer k ON t.transaksi_kostumer = k.kostumer_id
        JOIN mobil m ON t.transaksi_mobil = m.mobil_id";


$stmt = mysqli_query($conn, $sql);

if ($stmt && mysqli_num_rows($stmt) > 0) {

    $i = 0;

    while ($row = mysqli_fetch_assoc($stmt)) {

        $i++;
        $status_row = ($row['transaksi_status'] == 1) 
            ? "<i class='bi bi-check-circle-fill done'>Completed</i>" 
            : "<i class='bi bi-check-circle-fill not-done'>Not Completed</i>";

        echo "
        <tr>
            <td>{$row['transaksi_tgl']}</td>
            <td>
                <p style='margin-bottom: 3px;'><i class='bi bi-person-fill'
                    style='margin-right: 3px'></i>{$row['kostumer_nama']}</p>
                <hr color='gray'>
                <p style='margin-top: 3px;'><i class='bi bi-car-front-fill' style='margin-right: 3px'></i>{$row['mobil_merk']}</p>
            </td>
            <td>
                <p style='margin-bottom: 3px;'>{$row['transaksi_tgl_pinjam']}</p>
                <hr color='gray'>
                <p style='margin-top: 3px;'>{$row['transaksi_tgl_kembali']}</p>
            </td>
            <td>Rs. {$row['transaksi_harga']}</td>
            <td>Rs. {$row['transaksi_denda']}</td>
            <td>{$row['transaksi_tgldikembalikan']}</td>
            <td>Rs. {$row['transaksi_totaldenda']}</td>
            <td>{$status_row}</td>
        </tr>";
    }
} else {
    echo "<center style='padding-top: 20px'><p class='error'>No Transactions Available!</p></center>";
}


