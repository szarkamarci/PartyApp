<?php include('upload-engine.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Admin panel</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Admin panel</h2>
  </div>
	
  <form method="post" action="admin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="upload_event">Törlés</button>
  	</div>
  </form>
</body>
</html>