<?php
    $Servername =  "localhost";
    $username = "root";
    $password = "";
    $db_name = "sanjay";
    $conn =mysqli_connect($Servername,$username,$password,$db_name,3307);
    if (!$conn) 
    {
        echo"connection failed";
    }
?>