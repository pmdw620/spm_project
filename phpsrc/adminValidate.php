<?php
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'connectDB.php';
    if(isset($_POST['submit'])){
		$username = $_POST["username"];
		$password = md5($_POST['password']);

		$sql = "select * from adminuser where username='$username' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)==0){
			?>
			<script type = "text/javascript">
				alert("Incorrect username/password!");
				window.location.href = "http://localhost/spm_project/adminPage.html";
			</script>
			<?php
		} else{
			$_SESSION['admin'] = $username;
			header("Location: http://localhost/spm_project/bookingList.php");
		}
    }
    
    require 'closeDBConn.php';

?>