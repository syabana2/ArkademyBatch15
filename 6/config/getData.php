<?php
    require('connect.php');
    $id = $_POST['id'];

    $sql = "SELECT id, name, id_work, id_salary FROM Name WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);