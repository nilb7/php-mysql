<?php
include_once('config.php');

$id=$_GET['id'];
$sql="DELETE FROM matches WHERE id=:id";
$prep=$conn->prepare($sql);
$prep->bindParam(':id',$id);
$prep->execute();

header('Location:list_matches.php');

?>