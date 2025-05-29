<?php

session_start();

include_once("config.php");

$user_id=$_SESSION['id'];
$match_id=$_SESSION['id'];

$nr_tickets=$_POST['nr_tickets'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO booings(user_id,match_id,nr_tickets,date,time) VALUES (:user_id,:match_id:nr_tickets,:date,:time)";

$insertBookings=$conn->prepare($sql);
$insertBookings->bindParam(":user_id",$user_id);
$insertBookings->bindParam(":match_id",$movie_id);
$insertBookings->bindParam(":nr_tickets",$nr_tickets);
$insertBookings->bindParam(":date",$date);
$insertBookings->bindParam(":time",$time);

$insertBookings->execute();

header('Location:home.php')


?>