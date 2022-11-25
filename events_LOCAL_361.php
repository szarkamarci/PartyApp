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
   $query1 = "SELECT id, nev FROM esemenyek WHERE szervezo_id = $u_id ";
   $result1 = mysqli_query($db, $query1);
   

   $sql2 = "SELECT ertek, count(ertek) FROM ertekeles 
       INNER JOIN esemenyek ON esemenyek.id=esemeny_id 
         WHERE szervezo_id = $u_id
         GROUP BY esemeny_id";
   $result2 = mysqli_query($db, $sql2);

   while($row2 = mysqli_fetch_array($result2)):
      switch ($row2[0]) {
         case 1:
             $a += $row2[1];
             break;
         case 2:
            $b += $row2[1];
             break;
         case 3:
            $c += $row2[1];
            break;
         case 4:
            $d += $row2[1];
            break;
         case 5:
            $e += $row2[1];
             break;
         case 6:
            $f += $row2[1];
             break;
     }




    
   endwhile;



    
    ?>