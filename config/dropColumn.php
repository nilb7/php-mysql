<?php
$host = 'localhost';
$db = 'first_db';
$user = 'root';
$password = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    


    $sql = "ALTER TABLE user1 DROP COLUMN email";


    $pdo->exec($sql);

    echo "Added colum successfully";

}catch (Exeption $e) {

    echo  $e->getMessage();
}
?>