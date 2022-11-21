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



  if (isset($_POST['delete_event'])) {
    $option_val = $_POST['delete_event'];
    echo $option_val;
  }
  




  ?>