<?php
    error_reporting( error_reporting() & ~E_NOTICE );
    $sn = "localhost";
    $un = "root";
    $pw = "";
    $conn = mysqli_connect($sn, $un, $pw, 'spm_project');   
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>