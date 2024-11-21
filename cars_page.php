<?php
include __DIR__ . "/includes/header.php";
include __DIR__ . "/database/config.php";
?>

<main>
    <div class="title-container">
        <h2>Cars List</h2>
        <button class="add"><i class="bi bi-plus-lg"></i>
            <p>Add New Car</p>
        </button>
    </div>

    <!-- pop up model form -->
    <div class="model">
        <?php include __DIR__ . "/components/cars/car_form.php" ?>
    </div>

    <!-- data table container-->
    <p class="sub-title" id="sub">Rental Car Details</p>
    <div class="new-table">
        <table id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Color</th>
                    <th>Production Year</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php include __DIR__ . "/components/cars/cars_table.php" ?>
            </tbody>
        </table>
    </div>
</main>

<?php include __DIR__ . "/includes/footer.php" ?>