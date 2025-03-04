<?php
        $server = 'localhost';
        $username = 'root';
        $dbname = 'db';
        $password = '';

        try{
            $connection = new PDO("mysql:host=$server;$dbname;", $username, $password);
        }catch(Exception $e){
            echo 'Something went wrong';
        }
    
?>
