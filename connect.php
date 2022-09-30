<?php
$hostName = "localhost";
$userName = "redfly_buliappuser";
$password = "buliappuser";
$databaseName = "redfly_buliapp";
// Csatlakozás az adatbázishoz
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Csatlakozás ellenőrzése
if ($conn->connect_error) {
  die("Csatlakozás sikertelen: " . $conn->connect_error);
}
?>