<?php
    require 'connectDB.php';
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    if(isset($_POST['confirm'])){
        $serviceTime = $_POST['serviceTime'];
        $serviceOption = $_POST['serviceOption'];
        $carType = $_POST['carType'];
        $email = $_SESSION['user']['email'];
        $serviceDesc = $_POST['serviceDesc'];

        $sql = "insert into booking values ('$email', '$carType', '$serviceOption', '$serviceTime', '$serviceDesc')";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to get back");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Booking success!");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }
    }

    if(isset($_POST['delete0'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to booking management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }  
    } 
    if(isset($_POST['delete1'])){
        $serviceTime = $_SESSION['user']['bookings'][1]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to booking management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }  
    } 
    if(isset($_POST['delete2'])){
        $serviceTime = $_SESSION['user']['bookings'][2]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to booking management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }  
    } 
    if(isset($_POST['delete3'])){
        $serviceTime = $_SESSION['user']['bookings'][3]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to booking management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }  
    } 
    if(isset($_POST['delete4'])){
        $serviceTime = $_SESSION['user']['bookings'][4]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to booking management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }  
    } 
    if(isset($_POST['delete5'])){
        $serviceTime = $_SESSION['user']['bookings'][5]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            ?>
            <script type = "text/javascript">
                alert("Delete success! Click to back to booking management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        }  
    } 

    if(isset($_POST['change0'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            header("Location: http://localhost/spm_project/booking.php");
        }  
    }

    if(isset($_POST['change1'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            header("Location: http://localhost/spm_project/booking.php");
        }  
    }

    if(isset($_POST['change2'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            header("Location: http://localhost/spm_project/booking.php");
        }  
    }

    if(isset($_POST['change3'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            header("Location: http://localhost/spm_project/booking.php");
        }  
    }

    if(isset($_POST['change4'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            header("Location: http://localhost/spm_project/booking.php");
        }  
    }

    if(isset($_POST['change5'])){
        $serviceTime = $_SESSION['user']['bookings'][0]['service_time'];
        $email = $_SESSION['user']['email'];
        $sql = "delete from booking where email='$email' and service_time='$serviceTime'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to back to the car management page");
                window.location.href = "http://localhost/spm_project/myBooking.php";
            </script>
        <?php
        } else{
            require 'updateUser.php';
            header("Location: http://localhost/spm_project/booking.php");
        }  
    }
	require 'closeDBConn.php';
?>