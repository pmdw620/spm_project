<?php
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'connectDB.php';
    if(isset($_POST['changePassword'])){
        $password = md5($_POST['password']);
        $email = $_SESSION['user']['email'];

        // update user's password
        $sql = "update user set password='$password' where email='$email'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to go back");
                window.location.href = "http://localhost/spm_project/changePassword.php";
            </script>
        <?php
        } else{
            ?>
            <script type = "text/javascript">
                alert("Password update success!");
                window.location.href = "http://localhost/spm_project/myAccount.php";
            </script>
        <?php
        }
    }

    if(isset($_POST["updatePhone"])){
        $email = $_SESSION['user']['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $sql = "update user set phoneNumber='$phoneNumber' where email='$email'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to go back");
                window.location.href = "http://localhost/spm_project/changePassword.php";
            </script>
        <?php
        } else{
            require 'updateUser.php'
            ?>
            <script type = "text/javascript">
                alert("Phone Number Updated!");
                window.location.href = "http://localhost/spm_project/myAccount.php";
            </script>
        <?php
        }
    }

    if(isset($_POST["updateAddress"])){
        $email = $_SESSION['user']['email'];
        $street = $_POST['street'];
        $suburb = $_POST['suburb'];
        $postCode = $_POST['postCode'];
        $sql = "update user set street='$street', suburb='$suburb', postCode='$postCode' where email='$email'";
        if(!mysqli_query($conn, $sql)){
            ?>
            <script type = "text/javascript">
                alert("Error occurred: "<?php mysqli_error($conn)?>" Click to go back");
                window.location.href = "http://localhost/spm_project/changePassword.php";
            </script>
        <?php
        } else{
            require 'updateUser.php'
            ?>
            <script type = "text/javascript">
                alert("Address Information Updated!");
                window.location.href = "http://localhost/spm_project/myAccount.php";
            </script>
        <?php
        }
    }
?>