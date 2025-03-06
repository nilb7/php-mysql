<?php
        $server = 'localhost';
        $username = 'root';
        $dbname = 'db';

        try{
            $connection = new PDO("mysql:host=$server;$dbname;", $username);
            echo 'connected';
        }catch(Exception $e){
            echo 'Something went wrong';
        }
    
?>