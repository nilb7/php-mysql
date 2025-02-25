
<?php
$host = 'localhost';
$db = 'first_db';
$user = 'root';
$password = '';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    $username = 'John';
    $password = password_hash("mypassword", PASSWORD_DEFAULT);



    $sql = "INSERT INTO user1 (username, password) VALUES ('$username','$password')"
    $pdo->exec($sql);

    echo "New record inserted successfully";

}catch (Exeption $e) {

    echo  $e->getMessage();
}
?>