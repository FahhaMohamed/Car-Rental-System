<?php
include __DIR__ . "/includes/header.php";
include __DIR__ . "/database/config.php";
?>

<main>
    <h2>Dashboard</h2>

    <!-- over all results container-->
    <div class="overall-result">
        <div class="result-container cars">
            <div class="title">
                <h4>Available cars</h4>

                <?php include __DIR__ . "/components/dashboard/total_car.php" ?>

            </div>
            <i class="bi bi-car-front"></i>
        </div>
        <div class="result-container customers">
            <div class="title">
                <h4>Customers</h4>
                <?php include __DIR__ . "/components/dashboard/total_customer.php" ?>
            </div>
            <i class="bi bi-people"></i>
        </div>
        <div class="result-container transaction">
            <div class="title">
                <h4>Transactions</h4>
                <?php include __DIR__ . "/components/dashboard/total_transaction.php" ?>
            </div>
            <i class="bi bi-cash-stack"></i>
        </div>
        <div class="result-container rental">
            <div class="title">
                <h4>Completed Rentals</h4>
                <?php include __DIR__ . "/components/dashboard/total_completed.php" ?>
            </div>
            <i class="bi bi-check-all"></i>
        </div>
    </div>

    <!-- statistics container-->
    <p class="sub-title">Statistics</p>
    
    <div class="statistic">
        <canvas id="myTransactionChart"></canvas>
    </div>

    <!-- data table container-->
    <p class="sub-title">Recent Transactions</p>
    <div class="new-table">
        <table id="myTable">
            <thead>
                <tr>
                    <th>Transaction Date</th>
                    <th>Customer</th>
                    <th>Car</th>
                    <th>Rent</th>
                    <th>Return</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                <?php include __DIR__ . "/components/dashboard/recent_transactions.php" ?>

            </tbody>
        </table>
    </div>
</main>

<?php include __DIR__ . "/includes/footer.php" ?>