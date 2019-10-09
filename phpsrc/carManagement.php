<?php
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'connectDB.php';

    if(isset($_POST['add'])){
        $email = $_SESSION['user']['email'];
        $carType = $_POST['carType'];
        $sql = "select * from car where email='$email' and car_type='$carType'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)!=0){
            ?>
                <script type = "text/javascript">
                    alert("You have this car type in the database already (All that matters is the car type)");
                    window.location.href = "http://localhost/spm_project/myCars.php";
                </script>
            <?php
        } else{
            $sql ="insert into car values('$email', '$carType')";
            if(!mysqli_query($conn, $sql)){
                ?>
                <script type = "text/javascript">
                    alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                    window.location.href = "http://localhost/spm_project/myCars.php";
                </script>
            <?php
            } else{
                require 'updateUser.php';
                ?>
                <script type = "text/javascript">
                    alert("Adding success! Click to back to login page");
                    window.location.href = "http://localhost/spm_project/myCars.php";
                </script>
            <?php
            }
        }
    }

    if(isset($_POST['delete0'])){
        $carType = $_SESSION['user']['cars'][0];
        $email = $_SESSION['user']['email'];
        $sql = "delete from car where email='$email' and car_type='$carType'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myCars.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to login page");
                window.location.href = "http://localhost/spm_project/myCars.php";
            </script>
        <?php
        }
    }
    if(isset($_POST['delete1'])){
        $carType = $_SESSION['user']['cars'][1];
        $email = $_SESSION['user']['email'];
        $sql = "delete from car where email='$email' and car_type='$carType'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myCars.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to login page");
                window.location.href = "http://localhost/spm_project/myCars.php";
            </script>
        <?php
        }
    }
    if(isset($_POST['delete2'])){
        $carType = $_SESSION['user']['cars'][2];
        $email = $_SESSION['user']['email'];
        $sql = "delete from car where email='$email' and car_type='$carType'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myCars.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to login page");
                window.location.href = "http://localhost/spm_project/myCars.php";
            </script>
        <?php
        }
    }

?>