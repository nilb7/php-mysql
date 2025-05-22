<?php
include_once('config.php');

if(Isset($_POST['submit'])){
    $match_name=$_POST['match_name'];
    $match_desc=$_POST['match_desc'];
    $match_seat=$_POST['match_seat'];
    $match_image=$_POST['match_image'];

    $sql="INSERT INTO matches(match_name,match_desc,match_seat,movie_image) VALUES (:match_name,:match_desc,:match_seat,:match_image)";

    $insertMatch=$conn->prepare($sql);

    $insertMatch->bindParam(":match_name",$match_name);
    $insertMatch->bindParam(":match_desc",$match_desc);
    $insertMatch->bindParam(":match_seat",$match_seat);
    $insertMatch->bindParam(":match_image",$match_image);

    // $insertMatch->execute();

    header('Location:list_matches.php');
}

?>