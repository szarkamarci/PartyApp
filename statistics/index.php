<?php 
  include ("stat-engine.php");

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Jelentkezz be először!";
  	header('location: ../login/index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: ../login/index.php');   
  }
  function role($permission) {
	if($permission == 0){
	  return " [Tag] ";
	}elseif($permission == 1) {
	  return " [Szervező] ";
	}elseif($permission == 2) {
	  return " [Admin] ";
	} 
  }

?>

<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PartyApp - Főoldal</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="../script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
</head>
<video autoplay muted loop id="myVideo">
  <source src="../background.mp4" type="video/mp4">
</video>
<body>
<header class="wrapper bimage">

    <input type="checkbox" id="show_search">
    <h1 class="logo">BULI APP</h1>
    <h1 class="logo_2">BULI APP</h1>
</header>
<div class="main_dropdown_container">
   
    <div class="dropdown_logo_bar_li" onclick="toggle_bar()" id="toggle_bar" ><i class="fas fa-bars dropdown_logo_bar bar " ></i></div>

    <nav class="navbar_container toggle">
            <div class="main_navbar">
               
                <ul class="main_navbar_ul">
                
                    <li class="navbar_level_1_li"><a href="../index.php" class="navbar_level_1_link">Főoldal</a></li>
                    <li class="navbar_level_1_li"><a href="../favourites/index.php" class="navbar_level_1_link">Kedvencek</a></li>
                    <?php if($_SESSION['rang'] > 0) : ?>
                      <li class="navbar_level_1_li ">  
                        <a href="" class="navbar_level_1_link">Események kezelése</a>
                  
                            <ul class="dropdown_level_1">
                                    <li class="navbar_level_2_li"><a href="../upload/index.php" class="navbar_level_2_link">Feltöltés</a></li>
                                    <li class="navbar_level_2_li"><a href="index.php" class="navbar_level_2_link">Statisztika</a></li>

                            </ul>
                      </li>
                    
                    <?php endif ?>
           <?php if($_SESSION['rang'] > 1) : ?>          
					<li class="navbar_level_1_li"><a href="../admin/index.php" class="navbar_level_1_link">Admin Panel</a></li>
          <?php endif ?>
          <div class="logout">
					<li class="navbar_level_1_li"><a href="index.php?logout='1'" class="navbar_level_1_link">Kijelentkezés</a></li>
          </div>
                </ul>

            </div>
    </nav>
</div>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
   <?php while($row1 = mysqli_fetch_array($result1)):;?>
    <div class="table-responsive">
      <table class="table-border">
       <thead><tr>

      <th>Esemény neve</th>
      <th>Nem tetszik az előadó</th>
      <th>Nem tetszik a helyszín</th>
      <th>Túl drága</th>
      <th>Tetszik az előadó</th>
      <th>Tetszik a helyszín</th>
      <th>Kedvező ár</th>
    </thead>
    <tbody>
      <tr>
      <td><?php echo $row1[0];?></td>
      <td><?php echo $row1[1];?></td>
      <td><?php echo $row1[2];?></td>
      <td><?php echo $row1[3];?></td>
      <td><?php echo $row1[4];?></td>
      <td><?php echo $row1[5];?></td>
      <td><?php echo $row1[6];?></td>
     </tr>
      <tr>
        <td colspan="8">
  </td>
    <tr>
    <?php endwhile;?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
<div class="roles">
  <form action="index.php" method="post">
    <select name="delete_events">
    <?php while($row2 = mysqli_fetch_array($result2)):;?>
      <option value="<?php echo $row2[0];?>"id="eventval"><?php echo $row2[1];?></option>
    <?php echo $row2[0];?>
    <?php echo $row2[1];?> 
    <?php endwhile;?>
    </select>
      <button type="submit" class="btn" name="delete_event" id="okButton_event">Esemény Törlése</button>
  </form>
</div>
</div>
<script>
document.getElementById('okButton_event').value = document.getElementById('eventval').value;
</script>
</body>
</html>