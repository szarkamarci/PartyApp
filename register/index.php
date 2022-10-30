<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Regisztráció</title>
  <link rel="stylesheet" type="text/css" href="../css/logreg.css">
</head>
<body>
<div class="bg">	
  <div class="center">
  	<h2>Regisztráció</h2>
  <form method="post" action="index.php">
  	<?php include('../errors.php'); ?>
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
		<div class="szervezo">
            <label>Szervező?</label>
            <input type="checkbox" name="szervezo" class="checkoption" onclick="if (document.getElementsByClassName('checkoption')[0].checked) {document.getElementById('warn').style.display = 'block';} else {document.getElementById('warn').style.display = 'none';}">
              <div id="warn">A szervező jog beállítása hitelesítési kötelezettséggel jár, a regisztáció után az oldal adminisztátorai felveszik Önnel a kapcsolatot.<div/>
  </form>
  </div>
    </div>

    <input type="submit" value="Regisztráció" name="reg_user">
    <div class="signup_link">
        Már van fiókja? <a href="../login/index.php">Bejelentkezek!</a>
    </div>
</div>
</body>
</html>