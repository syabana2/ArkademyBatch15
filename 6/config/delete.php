<?php

    require('connect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM Name WHERE id=$id";
    mysqli_query($conn, $sql);

    header('location: ../index.php');

?>