<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App</title>
  <link rel="stylesheet" type="text/css" href="../css/logreg.css">
</head>
<body>
<div class="bg">
  <div class="center">
  	<h2>Bejelentkezés</h2>
  <form method="post" action="index.php">
  	<?php include('../errors.php'); ?>
  	<div class="txt_field">
	  	<input type="text" name="username">
		<span></span>
  		<label>Felhasználónév</label>
  	</div>
  	<div class="txt_field">
	  	<input type="password" name="password">
		<span></span>
  		<label>Jelszó</label>
  	</div>
        <input type="submit" value="Bejelentkezés" name="login_user">
    <div class="signup_link">
        Nincs még fiókja? <a href="../register/index.php">Regisztrálok!</a>
    </div>
  </form>
</div>
</div>
</body>
</html>