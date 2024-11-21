<form action="" method="post" id="car" class="form">
    <div class="form-title">
        <p class="sub-title">Add New Car</p>
        <i class="bi bi-x-lg" id="close"></i>
    </div>
    <tbody>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr><br>

        <tr>
            <td><label for="car_no">Car Number</label></td>
            <td><input type="number" name="car_no" id="car_no"></td>
        </tr><br>

        <tr>
            <td><label for="color">Color</label></td>
            <td><input type="text" name="color" id="color"></td>
        </tr><br>
        <tr>
            <td><label for="year">Vehicle year</label></td>
            <td><input type="number" name="year" id="year"></td>
        </tr><br>
        <tr>
            <td><label for="status">Car Status</label></td>
            <td><select name="status" id="status">
                    <option value="a">Available</option>
                    <option value="b">Not Available</option>
                </select></td>
        </tr><br>
        <tr>
            <td></td>
            <td>
                <center><button type="submit" name="save" id="save">Save</button></center>
            </td>
        </tr><br>
    </tbody>
</form>