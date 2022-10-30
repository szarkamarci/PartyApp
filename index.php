<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Jelentkezz be először!";
  	header('location: /login/index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /login/index.php");
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
<html>
<head>
	<title>Főoldal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Főoldal</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

 
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Üdvözöllek,  <strong><?php echo $_SESSION['username']; echo role($_SESSION['rang']); ?></strong></p>
		<?php if($_SESSION['rang'] > 1) : ?>
		<div class="input-group">
  	  		<button type="submit" class="btn" onclick="location.href='admin.php'">Admin panel</button>
  		</div>
		<?php endif ?>	
		<?php if($_SESSION['rang'] > 0) : ?>
		<div class="input-group">
  	  	<button type="submit" class="btn" onclick="location.href='upload.php'">Esemény feltöltése</button>
  		</div>
		<?php endif ?>
		<div class="input-group">
  	  		<button type="submit" class="btn" onclick="location.href='table.php'">Események</button>
  		</div>
		<p> <a href="index.php?logout='1'" style="color: red;">Kijelentkezés</a> </p>		
    <?php endif ?>
</div>
		
</body>
</html>