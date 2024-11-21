<?php

    $conn = mysqli_connect("localhost", "root", "", "car_rental");

    if(!$conn) {
        echo "Something went wrong!!!";
    }