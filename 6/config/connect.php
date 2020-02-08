<?php
    $servername = "localhost";
    $username = "route";
    $password = "jaringan2019";
    $dbname = "arkademyBatch15";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>