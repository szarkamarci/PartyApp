<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Regisztráció</title>
  <link rel="stylesheet" type="text/css" href="../css/logreg.css">
  <script src="script.js"></script>
  
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
			<label>Jelszó újra</label>
		</div>
		<div class="szervezo">
            <label for="myCheck">Szervező?</label>
            <input id="myCheck" type="checkbox" name="szervezo">
              <div id="warn" style="display:none">A szervező jog beállítása hitelesítési kötelezettséggel jár, a regisztáció után az oldal adminisztátorai felveszik Önnel a kapcsolatot.</div>
		</div>
    		<input type="submit" value="Regisztráció" name="reg_user">
    	<div class="signup_link">
        Már van fiókja? <a href="../login/index.php">Bejelentkezek!</a>
    	</div>
	</form>
</div>
</div>
<script>
	document.getElementById("myCheck").addEventListener("click", role);

	function role() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("warn");
    if (checkBox.checked == true){
    text.style.display = 'block';
    checkBox.value = 1;
    } else {
    text.style.display = 'none';
    checkBox.value = 0;
    }
}
</script>
</body>
</html>