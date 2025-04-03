<?php
    include_once("config.php")
    if(empty($_SESSION['username'])){
        header("Location: login.php")
    }
    $sql = "SELECT * FROM users";
    $selectUsers -> execute();

    $user_data = $selectUsers->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 20px
        }
    </style>
</head>
<body>
        <nav class="nav navbar-dark fixed-top bg-dark flex-md nowrap p-0 shadow">
            <a href="#" class="navbar-brand col-sm-3 col-md-2n mr-0">Welcome, <i><?php echo $_SESSION['username'];?></i><a>
                <ul class="nav-item text-nowrap">
                    <a href="logout.php" class="nav-link">Sign out</a>
                </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <ul class="sidebar-sticky">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <?php
    include_once('config.php');
    $sql ='SELECT * FROM users';
    $getUsers = $connection->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();

    ?>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
    <tbody>
        <?php
        foreach($users as $user) {
            ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['surname']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['age']?></td>
                <td><?="<a href='edit.php?id=$user[id]'>Edit User</a>"?></td>
                <td><?="<a href='delete.php?id=$user[id]'>Delete User</a>"?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
    <a href="index.php">Add User</a>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>