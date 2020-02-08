<?php
    require('connect.php');
    $name = $_POST['name'];
    $id_work = $_POST['work'];
    $id_salary = $_POST['salary'];
    $sql = "INSERT INTO Name (name, id_work, id_salary) VALUES ('$name', '$id_work', '$id_salary')";
    mysqli_query($conn, $sql);

    header('location: ../index.php');
?>