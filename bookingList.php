<html>
    <head></head>
    <body>
<?php 
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );
    require 'phpsrc/connectDB.php';
    date_default_timezone_set('Australia/Melbourne');
    $startOfTheWeek = date('Y-m-d');

    if($_SESSION['admin']=='admin'){
        $sql = "select fname, lname, phoneNumber, street, suburb, postcode, car_type, 
        service_option, service_desc, service_time from user right join booking 
		on user.email = booking.email
        where service_time >= $startOfTheWeek
		order by service_time asc";
        $result = mysqli_query($conn, $sql);
        ?>
        <h1> Booking list for this week (start from today)</h1>
        <h3 text-color="blue"><a href="phpsrc/adminLogout.php">Click here to Log Out</a></h2>
        <table border="1">
            <tr>
                <th> Name </th>
                <th> Phone </th>
                <th> Address </th>
                <th> Car Type </th>
                <th> Service Option </th>
                <th> Service Description</th>
				<th> Service Time </th>
            </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td align='center'>".$row['fname']." ".$row['lname']."</td>";
            echo "<td align='center'>".$row['phoneNumber']."</td>";
            echo "<td align='center'>".$row['street'].", ".$row['suburb'].", ".$row['postcode']."</td>";
            echo "<td align='center'>".$row['car_type']."</td>";
            echo "<td align='center'>".$row['service_option']."</td>";
            echo "<td align='center'>".$row['service_desc']."</td>";
			echo "<td align='center'>".$row['service_time']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
</body>