<?php
session_start();
include("connect.php");
// Változók létrehozása
$nev = "";
$kep = "";
$idopont = "";
$leiras = "";
$helyszin = "";
$event = "";
$szervezo_id = "";
$jegylink = "";
$errors = array(); 

// Csatlakozás az adatbázishoz
$db = $conn;
// ESEMÉNY FELTÖLTÉSE
// Hibakezelés, ha rendes user próbálná link alapján megnyitni az upload.php-t
if ($_SESSION['rang'] < 1){
  $_SESSION['success'] = "Nice try";
  header('location: index.php');
}else{

if (isset($_POST['upload_event'])) {
  // Az esemény feltöltéshez szükséges adatok eltárolása
  $nev = mysqli_real_escape_string($db, $_POST['nev']);
  $kep = mysqli_real_escape_string($db, $_POST['kep']);
  $idopont = mysqli_real_escape_string($db, $_POST['idopont']);
  $leiras = mysqli_real_escape_string($db, $_POST['leiras']);
  $helyszin = mysqli_real_escape_string($db, $_POST['helyszin']);
  $event = mysqli_real_escape_string($db, $_POST['event']);
  $jegylink = mysqli_real_escape_string($db, $_POST['jegylink']);
  $szervezo_id = $_SESSION['user_id'];

  if (empty($nev)) {array_push($errors, "Esemény név szükséges");}
  if (empty($kep)) {array_push($errors, "Kép szükséges");}
  if (empty($idopont)) {array_push($errors, "Időpont megadása szükséges");}
  if (empty($leiras)) {array_push($errors, "Leírás szükséges");}
  if (empty($helyszin)) {array_push($errors, "Helyszín megadása szükséges");}
  if (empty($event)) {array_push($errors, "Esemény típus szükséges");}
  if (empty($jegylink)) {array_push($errors, "Jegylink szükséges");}
  
  
  if (count($errors) == 0) {

  	$query = "INSERT INTO esemenyek (nev, kep, idopont, leiras, helyszin, event, jegylink, szervezo_id) 
  			  VALUES('$nev','$kep','$idopont','$leiras','$helyszin','$event','$jegylink', $szervezo_id )";
  	mysqli_query($db, $query);
    $_SESSION['success'] = "Sikeres feltöltés";
  	header('location: index.php');

  }
  else{
    $_SESSION['success'] = "Sikertelen feltöltés";
    header('location: index.php');
  }
}
}





?>