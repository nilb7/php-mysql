 <?php
 
 include_once('config.php');

 if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $movie_name=$_POST['match_name'];
    $moive_desc=$_POST['match_desc'];
    $movie_quality=$_POST['match_seat'];

    $sql="UPDATE users SET id=:id,match_name=:match_name,match_desc=:match_seat WHERE id=:id";

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':match_name',$match_name);
    $prep->bindParam(':match_desc',$match_desc);
    $prep->bindParam(':match_seat',$match_seat);
    $prep->execute();

    header('Location:list_matches.php');
}
 

 ?>