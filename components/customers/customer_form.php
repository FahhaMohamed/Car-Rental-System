<form action="" method="post" id="customer" class="form">
    <div class="form-title">
        <p class="sub-title">Add New Customer</p>
        <i class="bi bi-x-lg" id="close"></i>
    </div>
    <tbody>
        <tr>
            <td><label for="name">Customer</label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr><br>
        
        <tr>
            <td><label for="address">Address</label></td>
            <td><textarea name="address" id="address"></textarea></td>
        </tr><br>
        <tr>
            <td><label for="r_date">Gender</label></td>
            <td><input type="radio" name="r_date" id="r_date">Male</td>
            <td><input type="radio" name="r_date" id="r_date">Female</td>
            <td><input type="radio" name="r_date" id="r_date">Others</td>
        </tr><br>
        <tr>
            <td><label for="mobile">Mobile Number</label></td>
            <td><input type="number" name="number" id="number"></td>
        </tr><br>
        <tr>
            <td><label for="id_no">Id Card Number</label></td>
            <td><input type="number" name="id_no" id="id_no"></td>
        </tr><br>
        <tr>
            <td></td>
            <td>
                <center><button type="submit" name="save" id="save">Save</button></center>
            </td>
        </tr><br>
    </tbody>
</form>