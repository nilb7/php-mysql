<?php

$localhost = 'localhost';
$db = 'moduli11';
$user = 'root';
$password = '';

try{
    $connection = new PDO("mysql:host=$localhost;dbname=$db;", $user, $password);
    echo 'connected';
}catch(Exception $e){
    echo 'Something went wrong';
}


?>