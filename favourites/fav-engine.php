<?php
include("../connect.php");
include("../server.php");


$db = $conn;

$u_id = $_SESSION['u_id'];
$query1 = "SELECT esemenyek.nev
FROM ertekeles
INNER JOIN esemenyek ON esemenyek.id = esemeny_id
WHERE user_id = $u_id and ertek = 2 or ertek = 4 or ertek = 6
GROUP BY esemeny_id";

$result1= mysqli_query($db,$query1);



 ?>
