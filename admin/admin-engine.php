<?php
include("../connect.php");
// Változók létrehozása
$errors = array(); 

// Csatlakozás az adatbázishoz
$db = $conn;
// ESEMÉNY FELTÖLTÉSE
// Hibakezelés, ha rendes user vagy szervező próbálná link alapján megnyitni az upload.php-t

if ($_SESSION['rang'] > 1){




$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

$query1 = "SELECT * FROM esemenyek";
$result1 = mysqli_query($db, $query1);



  if (isset($_POST['set_user'])) {
    $u_id = $_POST['set_roles'];
    echo $username;

    $query_update = "UPDATE users SET szervezo = 0 WHERE id = $u_id";
    if(mysqli_query($db, $query_update)){
      echo "Jogosultság frissítve";
  } else {
      echo "Sikertelen jogosultság frissítés";
                
  } 
  }
  if (isset($_POST['set_szervezo'])) {
    $u_id = $_POST['set_roles'];
    echo $username;

    $query_update = "UPDATE users SET szervezo = 1 WHERE id = $u_id";
    if(mysqli_query($db, $query_update)){
      echo "Jogosultság frissítve";
  } else {
      echo "Sikertelen jogosultság frissítés";
                
  } 
  }
  if (isset($_POST['set_admin'])) {
    $u_id = $_POST['set_roles'];
    echo $username;

    $query_update = "UPDATE users SET szervezo = 2 WHERE id = $u_id";
    if(mysqli_query($db, $query_update)){
      echo "Jogosultság frissítve";
  } else {
      echo "Sikertelen jogosultság frissítés";
                
  } 
  }

  if (isset($_POST['delete_event'])) {
    $e_id = $_POST['delete_events'];
    echo $username;

    $query_update = "DELETE FROM esemenyek WHERE id = $e_id";
    if(mysqli_query($db, $query_update)){
      echo "Esemény törölve";
  } else {
      echo "Sikertelen esemény törlés";
                
  } 
  }



  
}else{
  header('location:../index.php');
}




  ?>