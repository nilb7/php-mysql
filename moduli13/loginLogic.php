<?php

    include_once('config.php');

    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if(empty($username) || empty($password)){
            echo "Fill all the fileds";
            header("refresh:2;url=login.php");

        }else{
            $sql="SELECT * FROM users WHERE username=:username";
            $tempSQL=$connection->prepare($sql);
            $tempSQL->bindParam(':username', $username);
            $tempSQL->execute();

            if($insertSql->rowCount() > 0){
                $data = $insertSql->fetch();
                if(password_verify($password, $data['password']){
                    $_SESSION['username']=$data['username'];
                    header("Locaion: dashboard.php");
                }else{
                    echo "Password Incorrect"
                    header("refresh:2; url=login.php");
                })
            }else{
                echo "User not Found!!";            
        }
}
}

?>