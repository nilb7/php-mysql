<?php

    include_once('config.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $tempPass = $_POST['paswword'];
        $password=password_hash($tempPass,PASSWORD_DEFAULT);

        if(empty($name) || empty($surname) empty($username) || empty($email) || empty($password) ||){
            echo "You need to fill all the fields";
        }else{
            $sql = "SELECT username FROM users WHERE username=:username";

            $tempSQL=$connection->prepare($sql);
            $tempSQL->bindParam(':username', $username);
            $tempSQL->execute();

            if($tempSQL->rowCount()>0){
                echo "Username exists";
                header ("refresh:2;url=signup.php");
            }else{
                
            }
        }

        
    }

?>