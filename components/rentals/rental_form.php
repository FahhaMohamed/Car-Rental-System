<form action="" method="post" id="rental" class="form">
    <div class="form-title">
        <p class="sub-title">Add New Transaction</p>
        <i class="bi bi-x-lg" id="close"></i>
    </div>
    <tbody>
        <tr>
            <td><label for="name">Customer</label></td>
            <td><select name="name" id="name" required>
                    <option value="">- Select Customer -</option>
                    <?php include __DIR__ . "/customer_list.php" ?>
                </select></td>
        </tr><br>
        <tr>
            <td><label for="car">Car</label></td>
            <td><select name="car" id="car" required>
                    <option value="">- Select Car -</option>
                    <?php include __DIR__ . "/car_list.php" ?>
                </select></td>
        </tr><br>
        <tr>
            <td><label for="b_date">Borrow Date</label></td>
            <td><input type="date" name="b_date" id="b_date" required></td>
        </tr><br>
        <tr>
            <td><label for="r_date">Return Date</label></td>
            <td><input type="date" name="r_date" id="r_date" required></td>
        </tr><br>
        <tr>
            <td><label for="t_price">Total Price</label></td>
            <td><input type="number" name="t_price" id="t_price" required></td>
        </tr><br>
        <tr>
            <td><label for="f_price">Fine per day</label></td>
            <td><input type="number" name="f_price" id="f_price" required></td>
        </tr><br>
        <tr>
            <td><input type="hidden" name="today" id="today"></td>
            <td>
                <center><button type="submit" name="save" id="save">Save</button></center>
            </td>
        </tr><br>
    </tbody>
</form>