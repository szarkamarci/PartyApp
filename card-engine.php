<?php 
include("connect.php");

$db = $conn;

if(isset($_POST['btnValue'], $_POST['event']))
    {
      $user_id = $_SESSION['u_id'];
      $value = $_POST['btnValue'];
      $event_id = $_POST['event'];
      
      $query = "INSERT INTO ertekeles (user_id, esemeny_id, ertek) 
      VALUES('$user_id','$event_id','$value')";
      mysqli_query($db, $query);
  }
?>