<?php
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'connectDB.php';

    $email = $_SESSION['user']['email'];
    $sql = "select * from user where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $fname = $row["fname"];
            $lname = $row["lname"];
            $street = $row["street"];
            $suburb = $row["suburb"];
            $postcode = $row["postcode"];
            $phoneNumber = $row["phoneNumber"];
            $sql = "select * from car where email = '$email'";
            $cars = array();
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
                $car = $row["car_type"];
                array_push($cars, $car);
            }
            // get the bookings
            $bookings = array();
            $sql = "select * from booking where email='$email'";
            $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
                $booking = $row;
                array_push($bookings, $booking);
            }
            // store the variables into session
            $user_profile = array("email"=>$email, "fname"=>$fname, "lname"=>$lname, 
                "street"=>$street, "suburb"=>$suburb, "postcode"=>$postcode, "phoneNumber"=>$phoneNumber, 
                "cars"=>$cars, "bookings"=>$bookings);
            $_SESSION["user"] = $user_profile;
    require 'closeDBConn.php'
?>