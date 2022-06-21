<?php 
    $host = "localhost";
    $port = "3306";
    $database = "test";
    $user = "root";
    $pass = "";

    $conn = new mysqli($host, $user, $pass, $database, $port);

    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }
?>