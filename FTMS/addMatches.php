<?php
include_once('config.php');

if(Isset($_POST['submit'])){
    $match_name=$_POST['match_name'];
    $match_desc=$_POST['match_desc'];
    $match_seat=$_POST['match_seat'];  
    $match_image=$_POST['match_image'];

    $sql="INSERT INTO matches(match_name,match_desc,match_seat,match_image) VALUES (:match_name,:match_desc,:match_seat,:match_image)";

    $insertmatch=$conn->prepare($sql);

    $insertmatch->bindParam(":match_name",$match_name);
    $insertmatch->bindParam(":match_desc",$match_desc);
    $insertmatch->bindParam(":match_seat",$match_seat);
    $insertmatch->bindParam(":match_image",$match_image);

    $insertmatch->execute();

    header('Location:list_matches.php');
}

?>