<html>
<head>
</head>
<body>
<?php
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'connectDB.php';

    if(isset($_POST["signIn"])){
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        // check if user signing in is existed in the database
        $sql = "select * from user where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        // if the account is not exist, direct user back to login page
        if(mysqli_num_rows($result)==0)
        {
            ?>
            <script type = "text/javascript">
                alert("The account is not exist or the password is incorrect, click to get back to log in page");
                window.location.href = "http://localhost/spm_project/login.html";
            </script>
            <?php
        }
        else
        {
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
            date_default_timezone_set('Australia/Melbourne');
            $startOfTheWeek = date('Y-m-d');
            $sql = "select * from booking where email='$email' and service_time > $startOfTheWeek";
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

            // get service providers' address
            $sql = "select address from adminuser";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['adminAddress'] = $row['address'];

            // redirect user back to home page
            header("Location: http://localhost/spm_project/index.php");
        }
    }
    if(isset($_POST["register"])){
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $phoneNumber = $_POST["phoneNumber"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $carType = $_POST["carType"];
        $street = $_POST["street"];
        $suburb = $_POST["suburb"];
        $postcode = $_POST["postCode"];
        // check if the email is existed in the database
        $sql = "select * from user where email = '$email'";
        $result = mysqli_query($conn, $sql);
        // if the account email has been registered, redirect to login page
        if(mysqli_num_rows($result)!=0){
            ?>
            <script type = "text/javascript">
                alert("The account is registered already, click to back to the log in page");
                window.location.href = "http://localhost/spm_project/login.html";
            </script>
            <?php
        } else{
            $sql = "insert into user (email, password, fname, lname, street, suburb, postcode, phoneNumber) values ('$email', '$password', '$fname', '$lname', '$street', '$suburb', '$postcode', '$phoneNumber')";
            if(!mysqli_query($conn, $sql)){
                ?>
                <script type = "text/javascript">
                    alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the log in page");
                    window.location.href = "http://localhost/spm_project/login.html";
                </script>
            <?php
            } else{
                $sql = "insert into car values ('$email', '$carType')";
                // if there is an error occured, redirect user back to log in page
                if(!mysqli_query($conn, $sql)){
                    ?>
                    <script type = "text/javascript">
                        alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the log in page");
                        window.location.href = "http://localhost/spm_project/login.html";
                    </script>
                <?php
                } else{
                    ?>
                    <script type = "text/javascript">
                        alert("Register success! Click to back to login page");
                        window.location.href = "http://localhost/spm_project/login.html";
                    </script>
                <?php
                }
            }
        }
    }
    require 'closeDBConn.php';

?>
</body>
</html>