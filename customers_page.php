<?php
include __DIR__ . "/includes/header.php";
include __DIR__ . "/database/config.php";
?>

<main>
    <div class="title-container">
        <h2>Customers List</h2>
        <button class="add"><i class="bi bi-plus-lg"></i>
            <p>Add New Customer</p>
        </button>
    </div>

    <!-- pop up model form -->
    <div class="model">
        <?php include __DIR__ . "/components/customers/customer_form.php" ?>
    </div>

    <!-- data table container-->
    <p class="sub-title" id="sub">Customer Details</p>
    <div class="new-table">
        <table id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>ID Card</th>
                    <th>Address</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php include __DIR__ . "/components/customers/customers_table.php" ?>

            </tbody>
        </table>
    </div>
</main>

<?php include __DIR__ . "/includes/footer.php" ?>