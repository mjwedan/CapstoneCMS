<?php
    $dbServer = "localhost";
    $dbUsername = "root";    // This is the same username as phpMyAdmin
    $dbPassword = "root";    // This is the same password as phpMyAdmin
    $dbName = "review";

    // Create connection
    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>
