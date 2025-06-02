<?php
 
 include_once('config.php');

 if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $match_name=$_POST['match_name'];
    $match_desc=$_POST['match_desc'];
    $match_seat=$_POST['match_seat'];

<<<<<<< HEAD
    $sql = "UPDATE matches SET id=:id,  match_name=:match_name, match_desc=:match_desc, match_seat=:match_seat WHERE id=:id";
=======
>>>>>>> d5d07f03f27e1664bacc819a413d4fc6eecac980

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':match_name',$match_name);
    $prep->bindParam(':match_desc',$match_desc);
    $prep->bindParam(':match_seat',$match_seat);
    $prep->execute();

    header('Location:list_matches.php');
}
 

 ?>