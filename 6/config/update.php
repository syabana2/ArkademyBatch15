<?php
    require('connect.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $id_work = $_POST['work'];
    $id_salary = $_POST['salary'];
    $sql = "UPDATE Name SET name='$name', id_work='$id_work', id_salary='$id_salary' WHERE id='$id'";
    mysqli_query($conn, $sql);

    header('location: ../index.php');
?>