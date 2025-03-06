<?php

require('config.php');
if(isset($_POST['submit'])){
    $name = $_POST['name']
    $username = $_POST['username']
    $email = $_POST['email']
    $sql = 'INSERT INTO users(name,username,email)
    VALVES(NAME, USERNAME ,EMAIL)';

    
    $sqlQuery = $connection -> prepare ($sql);
    $sqlQuery -> bindParam(':name','$name');
    $sqlQuery -> bindParam(':username','$username');
    $sqlQuery -> bindParam(':email','$email');

}


?>