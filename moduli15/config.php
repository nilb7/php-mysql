<?php
    session_start();

$localhost = 'localhost';
$db = 'db';
$user = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$localhost;dbname=$db;", $user, $password);
    echo 'connected';
}catch(PDOException $e){
    echo 'Something went wrong';
}


?>