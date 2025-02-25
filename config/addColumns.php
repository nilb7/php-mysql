<?php
$host = 'localhost';
$db = "first_db";
$user = "root";
$password = "";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    


    $sql = "ALTER TABLE users ADD email1 VARCHAR(255)";


    $pdo->exec($sql);

    echo "Added colum successfully";

}catch (Exeption $e) {

    echo  $e->getMessage();
}
?>