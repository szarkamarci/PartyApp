<?php 
include("connect.php");
include("server.php");



$db= $conn;

$tableName="esemenyek";
$columns= ['id', 'nev', 'kep','idopont','leiras','helyszin', 'event','jegylink','szervezo_id'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Csatlakozási hiba";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}

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


