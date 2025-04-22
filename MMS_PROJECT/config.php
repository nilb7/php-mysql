<?php

$localhost = 'localhost';
$db = 'mms';
$user = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$localhost;dbname=$db;", $user, $password);
    echo 'connected';
}catch(Exception $e){
    echo 'Something went wrong';
}


?>