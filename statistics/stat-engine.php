<?php
include("../connect.php");
include("../server.php");

// ESEMÉNYEK LISTÁZÁSA
if ($_SESSION['rang'] < 1){
   header('location: ../index.php');
 }else{
   $db = $conn;

   $u_id = $_SESSION['u_id'];
   $query1 = "SELECT esemenyek.nev,  
   COUNT(CASE WHEN ertek = 1 then ertek end) as dislike,
   COUNT(CASE WHEN ertek = 3 then ertek end) as wrong_place,
   COUNT(CASE WHEN ertek = 5 then ertek end) as wrong_price,
   COUNT(CASE WHEN ertek = 2 then ertek end) as li, 
   COUNT(CASE WHEN ertek = 4 then ertek end) as good_place,
   COUNT(CASE WHEN ertek = 6 then ertek end) as good_price
   FROM ertekeles
   INNER JOIN esemenyek ON esemenyek.id = esemeny_id
   WHERE esemenyek.szervezo_id = $u_id
   GROUP BY esemeny_id";
   $result1= mysqli_query($db,$query1);



   $query2 = "SELECT * FROM esemenyek WHERE szervezo_id = $u_id ";
   $result2 = mysqli_query($db, $query2);
   
   if (isset($_POST['delete_event'])) {
    $e_id = $_POST['delete_events'];
    

    $query_update = "DELETE FROM esemenyek WHERE id = $e_id";
    if(mysqli_query($db, $query_update)){
      echo "Esemény törölve";
  } else {
      echo "Sikertelen esemény törlés";
                
  } 
  }
   


 }


    
    ?>
