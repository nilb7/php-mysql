<?php

require('config.php');


    $user_id = $_GET['id'];
    var_dump($user_id);
    $sql = "DELETE FROM users WHERE id=:id";   

    $prep = $connection->prepare($sql);

    $prep->bindParam(':id', $id);

    $prep->execute();

    // header("Location: dashboard.php");


?>