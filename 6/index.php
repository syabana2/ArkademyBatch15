<?php
    require('config/connect.php');

    $sql1 = "SELECT Name.id, Name.name, Work.name_work, Category.salary FROM Name INNER JOIN Work ON Name.id_work=Work.id INNER JOIN Category ON Name.id_salary=Category.id;";
    $sql2 = "SELECT id, name_work from Work;";
    $sql3 = "SELECT id, salary from Category;";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Arkademy Bootcamp</title>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <img src="img/logo.png" class="d-inline-block align-top imgheader" alt="Logo Arkademy">
            <a class="navbar-brand">
                ARKADEMY BOOTCAMP
            </a>
            <button class="btn btn-add my-2 my-sm-0 tampilModalAdd" data-toggle="modal" data-target="#addModal">ADD</button>
        </nav>
    </div>

    <main>
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th scope="col">
                            <center>Name
                        </th>
                        <th scope="col" width="30%">
                            <center>Work
                        </th>
                        <th scope="col" width="20%">
                            <center>Salary
                        </th>
                        <th scope="col" width="15%">
                            <center>Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row1 = mysqli_fetch_assoc($result1)) : ?>
                        <tr>
                            <th scope="row">
                                <center> <?= $row1['name']; ?>
                            </th>
                            <td>
                                <center><?= $row1['name_work']; ?>
                            </td>
                            <td>
                                <center>Rp.<?= $row1['salary']; ?>
                            </td>
                            <td>
                                <center>
                                    <a onclick="if (confirm('Are you sure to Delete <?= $row['name'] ?>')) commentDelete(1); return false" href='config/delete.php?id=<?= $row1['id'] ?>'><img src="img/trash.png" class="delete" alt="Delete"></a>
                                    <a data-id=<?= $row1['id'] ?> data-toggle="modal" data-target="#addModal" class="tampilModalUbah"><img src="img/edit.png" class="edit" alt="Edit"></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="config/add.php" method="post">
                        <input type="hidden" name="id" id="id">
                        <input name="name" id="name" class="form-control form-control-lg" type="text" placeholder="Name ..." required>
                        <br>
                        <select class="form-control form-control-lg" name="work" id="work" required>
                            <option value="" disabled selected>Work ...</option>
                            <?php while ($row2 = mysqli_fetch_assoc($result2)) : ?>
                                <option value="<?= $row2['id']; ?>"> <?= $row2['name_work']; ?> </option>
                            <?php endwhile; ?>
                        </select>
                        <br>
                        <select class="form-control form-control-lg" name="salary" id="salary" required>
                            <option value="" disabled selected>Salary ...</option>
                            <?php while ($row3 = mysqli_fetch_assoc($result3)) : ?>
                                <option value="<?= $row3['id']; ?>"> <?= $row3['salary']; ?> </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" style="color:white" class="addd">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>