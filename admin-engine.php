<?php
session_start();
include("connect.php");
// Változók létrehozása
$errors = array(); 

// Csatlakozás az adatbázishoz
$db = $conn;
// ESEMÉNY FELTÖLTÉSE
// Hibakezelés, ha rendes user vagy szervező próbálná link alapján megnyitni az upload.php-t
if ($_SESSION['rang'] < 2){
  $_SESSION['success'] = "Nincs jogosultsága";
  header('location: index.php');
}else{
  if (isset($_POST['delete_event'])) {
    echo "Jó";
  }elseif (isset($_POST['back'])){
    header('location: index.php');
  }
}

  ?>