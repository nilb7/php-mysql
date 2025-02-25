<?php
// $host = 'localhost';
// $user = 'root';
// $password = '';

// try{
//     $conn = new PDO("mysql:host=$host; dbname=$first_db" $user, $password);
//     $sql = "CREATE DATABASE project1";
//     $conn->exec($sql);

//     echo "Connection successful"
// }

// catch(Excpetion $e){
//     echo "Error:".$e
// }

$host = 'localhost';
$db = 'first_db';
$user = 'root';
$pass = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "CREATE TABLE IF NOT EXISTS user1 (id INT(6) UNSIGNED  AUTO_INCEREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(50) NOT NULL)";

    $pdo->exec($sql);

    echo "Table created successfully";

}catch (Exeption $e) {

    echo "Error creating table: ". $e->getMessage();
}


?>