<?php
include_once('config.php');

if(Isset($_POST['submit'])){
    $movie_name=$_POST['match_name'];
    $movie_desc=$_POST['match_desc'];
    $movie_quality=$_POST['match_seat'];
    $movie_image=$_POST['movie_image'];

    $sql="INSERT INTO movies(match_name,match_desc,match_seat,movie_image) VALUES (:match_name,:match_desc,:match_seat,:movie_image)";

    $insertMovie=$conn->prepare($sql);

    $insertMovie->bindParam(":match_name",$match_name);
    $insertMovie->bindParam(":match_desc",$match_desc);
    $insertMovie->bindParam(":match_seat",$match_seat);
    $insertMovie->bindParam(":movie_image",$movie_image);

    $insertMovie->execute();

    header('Location:list_movies.php');
}

?>