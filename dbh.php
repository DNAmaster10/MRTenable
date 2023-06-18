<?php
    $dbServername = "localhost";
    $dbUsername = getenv("DB_USERNAME");
    $dbPassword = getenv("DB_PASSWORD");
    $dbName = "tenable";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQLi: " . mysqli_connect_error();
    }
