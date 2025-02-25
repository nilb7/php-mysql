<?php
$host = 'localhost';
$db = 'first_db';
$user = 'root';
$password = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    


    $sql = "DROP TABLE user1";


    $pdo->exec($sql);

    echo "Added colum successfully";

}catch (Exeption $e) {

    echo  $e->getMessage();
}
?>