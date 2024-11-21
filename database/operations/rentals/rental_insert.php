<?php 

include __DIR__ . "/../../config.php";

// print_r($_POST);

$sql = "INSERT INTO `transaksi` (`transaksi_karyawan`, `transaksi_kostumer`, `transaksi_mobil`, `transaksi_tgl_pinjam`, `transaksi_tgl_kembali`, `transaksi_harga`, `transaksi_denda`, `transaksi_tgl`, `transaksi_totaldenda`, `transaksi_status`, `transaksi_tgldikembalikan`) VALUES (1,?,?,?,?,?,?,?,0, 0,?)";

$stmt = mysqli_prepare($conn, $sql);

if($stmt) {

    $stmt->bind_param('iissiiss', $_POST['name'], $_POST['car'], $_POST['b_date'], $_POST['r_date'], $_POST['t_price'], $_POST['f_price'], $_POST['today'],$_POST['r_date']);

    if ($stmt->execute()){
        
        echo "<td>{$_POST['today']}</td>
            <td>
                <p style='margin-bottom: 3px;'><i class='bi bi-person-fill'
                    style='margin-right: 3px'></i>{$_POST['name']}</p>
                <hr color='gray'>
                <p style='margin-top: 3px;'><i class='bi bi-car-front-fill' style='margin-right: 3px'></i>{$_POST['car']}</p>
            </td>
            <td>
                <p style='margin-bottom: 3px;'>{$_POST['b_date']}</p>
                <hr color='gray'>
                <p style='margin-top: 3px;'>{$_POST['r_date']}</p>
            </td>
            <td>Rs. {$_POST['t_price']}</td>
            <td>Rs. {$_POST['f_price']}</td>
            <td>{$_POST['r_date']}</td>
            <td>Rs. 0</td>
            <td><i class='bi bi-check-circle-fill not-done'>Not Completed</i></td>";

    } else {
        echo "Error on execute: " .$stmt->error;
    }

    $stmt->close();

} else {
    echo $conn->error;
}

$conn->close();