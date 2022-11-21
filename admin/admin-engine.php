<?php
include("../connect.php");
// Változók létrehozása
$errors = array(); 

// Csatlakozás az adatbázishoz
$db = $conn;
// ESEMÉNY FELTÖLTÉSE
// Hibakezelés, ha rendes user vagy szervező próbálná link alapján megnyitni az upload.php-t

$query = "SELECT * FROM users ";
$result1 = mysqli_query($db, $query);



  if (isset($_POST['set_user'])) {
    $u_id = $_POST['taskOption'];
    echo $username;

    $query_update = "UPDATE users SET szervezo = 0 WHERE id = $u_id";
    if(mysqli_query($db, $query_update)){
      echo "Record was updated successfully.";
  } else {
      echo "ERROR: Could not able to execute $query_update. ";
                
  } 
  }
  if (isset($_POST['set_szervezo'])) {
    $u_id = $_POST['taskOption'];
    echo $username;

    $query_update = "UPDATE users SET szervezo = 1 WHERE id = $u_id";
    if(mysqli_query($db, $query_update)){
      echo "Record was updated successfully.";
  } else {
      echo "ERROR: Could not able to execute $query_update. ";
                
  } 
  }
  if (isset($_POST['set_admin'])) {
    $u_id = $_POST['taskOption'];
    echo $username;

    $query_update = "UPDATE users SET szervezo = 1 WHERE id = $u_id";
    if(mysqli_query($db, $query_update)){
      echo "Record was updated successfully.";
  } else {
      echo "ERROR: Could not able to execute $query_update. ";
                
  } 
  }
  





  ?>