<?php
include __DIR__ . "/includes/header.php";
include __DIR__ . "/database/config.php";
?>

<main>
    <div class="title-container">
        <h2>Rent the car</h2>
        <button class="add"><i class="bi bi-plus-lg"></i>
            <p>New Transaction</p>
        </button>
    </div>

    <!-- pop up model form -->
    <div class="model">
        <?php include __DIR__ . "/components/rentals/rental_form.php" ?>
    </div>

    <!-- data table container-->
    <p class="sub-title" id="sub">Transaction Data</p>
    <div class="new-table">
        <table id="myTable" class="rentalTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>
                        <p style="margin-bottom: 3px;">Customer</p>
                        <hr color="gray">
                        <p style="margin-top: 3px;">Car</p>
                    </th>
                    <th>
                        <p style="margin-bottom: 3px;">Borrow</p>
                        <hr color="gray">
                        <p style="margin-top: 3px;">Return</p>
                    </th>
                    <th>Price</th>
                    <th>Fine P.D</th>
                    <th>Returned</th>
                    <th>Penalty</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                <?php include __DIR__ . "/components/rentals/rental_table.php" ?>



            </tbody>
        </table>
    </div>
</main>

<?php include __DIR__ . "/includes/footer.php" ?>