<?php
$host = 'localhost';
$user = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$host; dbname=$first_db" $user, $password);
    $sql = "CREATE DATABASE project1";
    $conn->exec($sql);

    echo "Connection successful"
}

catch(Excpetion $e){
    echo "Error:".$e
}


?>