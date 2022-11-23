<?php
session_start();
include("connect.php");
// Változók létrehozása
$username = "";
$email    = "";
$u_id = 0;
$szervezo = 0;
$errors = array(); 

// Csatlakozás az adatbázishoz
$db = $conn;


// FELHASZNÁLÓ REGISZTRÁCIÓ
if (isset($_POST['reg_user'])) {
  // A regisztrációhoz szükséges adatok eltárolása
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $szervezo = mysqli_real_escape_string($db, $_POST['szervezo']);
  // Regisztrációs felület ellenőrzése, hogy minden adat meglett e adva?
  
  if (empty($username)) { array_push($errors, "Felhasználó név szükséges"); }
  if (empty($email)) { array_push($errors, "Email cím szükéges"); }
  if (empty($password_1)) { array_push($errors, "Jelszó szükséges"); }
  if ($password_1 != $password_2) {
	array_push($errors, "A két jelszó nem egyezik!");
  }

  // Ellenőrizüzk le,hogy létezik e már ilyen felhasználó vagy email az adatbázisban
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // Ha már létezik ilyen felhasználó
    if ($user['username'] === $username) {
      array_push($errors, "A felhasználónév már létezik");
    }

    if ($user['email'] === $email) { // Ha már létezik ilyen email
      array_push($errors, "Az email cím már foglalt");
    }
  }

  // Regisztrálás, ha nincs hiba a formulán
  if (count($errors) == 0) {
    if ($_POST['szervezo'] == 1){
      $szervezo = 1;
    }elseif($_POST['szervezo'] == 0){
      $szervezo = 0;
    }
  	$password = md5($password_1);//Jelszó titkosítása, mielőtt az adatbázisban eltároljuk
  	$query = "INSERT INTO users (username, email, password, szervezo) 
  			  VALUES('$username', '$email', '$password', '$szervezo')";
  	mysqli_query($db, $query);
    $query2 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$result = mysqli_query($db, $query2);
    if (mysqli_num_rows($result) == 1) {
      while($row = mysqli_fetch_assoc($result)){
        $array = $row;
      }  
    $u_id = $array['id'];
    $_SESSION['u_id'] = $u_id;
  	$_SESSION['username'] = $username;
    $_SESSION['rang'] = $szervezo;
  	$_SESSION['success'] = "Sikeres bejelentkezés";
  	header('location: ../index2.php');
  }
}
}

// BEJELENZKEZÉS
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) {
  	array_push($errors, "Felhasználónév szükséges");
  }
  if (empty($password)) {
  	array_push($errors, "Jelszó szükséges");
  }


// Bejelentkezési adatok ellenőrzése
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$result = mysqli_query($db, $query);
// Jogosultág lekérdezése
  	if (mysqli_num_rows($result) == 1) {
      while($row = mysqli_fetch_assoc($result)){
        $array = $row;
      }
      $rang = $array['szervezo'];
      $u_id = $array['id'];
      $_SESSION['u_id'] = $u_id;
  	  $_SESSION['username'] = $username;
      $_SESSION['rang'] = $rang;
  	  $_SESSION['success'] = "Sikeres bejelentkezés";
  	  header('location: ../index2.php');
  	}else {
  		array_push($errors, "Hibás felhasználónév vagy jelszó");
  	}
  }
}

    // Checking, if post value is
    // set by user or not
    if(isset($_POST['btnValue'], $_POST['event']))
    {
      $user_id = $_SESSION['u_id'];
      $value = $_POST['btnValue'];
      $event_id = $_POST['event'];
      
      $query = "INSERT INTO ertekeles (user_id, esemeny_id, ertek) 
      VALUES('$user_id','$event_id','$value')";
      mysqli_query($db, $query);
  }


	/* csekk hany esemeny van feltoltve
	  $sql = "SELECT COUNT(*) AS osszesesemeny FROM esemenyek";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		//$_SESSION['u_id'] = $u_id;
		echo $row["osszesesemeny"];

	  }
	} else {
	}
	*/



