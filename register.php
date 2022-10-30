<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Regisztráció</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="bg">	
  <div class="center">
  	<h2>Regisztráció</h2>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
		<div class="txt_field">
			<input type="text" name="username" value="<?php echo $username; ?>">
			<span></span>
			<label>Felhasználónév</label>
		</div>
		<div class="txt_field">
			<input type="email" name="email" value="<?php echo $email; ?>">
			<span></span>
			<label>Email</label>
		</div>
		<div class="txt_field">
			<input type="password" name="password_1">
			<span></span>
			<label>Jelszó</label>
		</div>
		<div class="txt_field">
			<input type="password" name="password_2">
			<span></span>
			<label>Jelszó még egyszer</label>
		</div>
		<div class="txt_field">
			<label>Szervező?</label>
		</div>
	<!--
	
			<input type="checkbox" name="szervezo" class="checkoption" value=1 onclick="checkedOnClick(this);"> Igen <br>
			<input type="checkbox" name="szervezo" checked="checked" class="checkoption" value=0 onclick="checkedOnClick(this);"> Nem <br>
		
	-->
	<input type="submit" value="Regisztráció" name="reg_user">
    <div class="signup_link">
        Már van fiókja? <a href="login.php">Bejelentkezek!</a>
    </div>
  </form>
</div>
</div>
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