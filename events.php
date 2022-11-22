<?php
include("connect.php");
include("server.php");

$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
$f = 0;
// ESEMÉNYEK LISTÁZÁSA
    
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
   
   $u_id = $_SESSION['u_id'];
   $query1 = "SELECT esemenyek.nev,  
   COUNT(CASE WHEN ertek = 1 then ertek end) as dislike,
   COUNT(CASE WHEN ertek = 2 then ertek end) as wrong_place,
   COUNT(CASE WHEN ertek = 3 then ertek end) as wrong_price,
   COUNT(CASE WHEN ertek = 4 then ertek end) as li, 
   COUNT(CASE WHEN ertek = 5 then ertek end) as good_place,
   COUNT(CASE WHEN ertek = 6 then ertek end) as good_price,
   null
   FROM ertekeles
   INNER JOIN esemenyek ON esemenyek.id = esemeny_id
   WHERE esemenyek.szervezo_id = $u_id
   GROUP BY esemeny_id";

   $result1 = mysqli_query($db, $query1);
   





    
    ?>