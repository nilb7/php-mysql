 <?php
 
 include_once('config.php');

 if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $movie_name=$_POST['moive_name'];
    $moive_desc=$_POST['movie_desc'];
    $movie_quality=$_POST['movie_quality'];

    $sql="UPDATE users SET id=:id,movie_name=:movie_name,movie_desc=:movie_desc,movie_quality=:movie_quality WHERE id=:id";

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':movie_name',$movie_name);
    $prep->bindParam(':movie_desc',$movie_desc);
    $prep->bindParam(':movie_quality',$movie_quality);
    $prep->execute();

    header('Location:list_movie.php');
}
 

 ?>