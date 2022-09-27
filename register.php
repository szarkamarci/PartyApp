<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Regisztráció</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Regisztráció</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Felhasználónév</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Jelszó</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Jelszó még egyszer</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Szervező?</label>
	  <input type="checkbox" name="szervezo" class="checkoption" value=1 onclick="checkedOnClick(this);"> Igen <br>
      <input type="checkbox" name="szervezo" checked="checked" class="checkoption" value=0 onclick="checkedOnClick(this);"> Nem <br>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Regisztrálok</button>
  	</div>
  	<p>
  		Már van fiókja? <a href="login.php">Bejelentkezek!</a>
  	</p>
  </form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){

      $('.checkoption').click(function() {
         $('.checkoption').not(this).prop('checked', false);
      });

   });
</script>
</body>
</html>