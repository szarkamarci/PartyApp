<?php
include("../connect.php");
include("../server.php");


$db = $conn;

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

$result1= mysqli_query($db,$query1);








 
 ?>
