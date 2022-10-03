<?php include('admin-engine.php') ?>
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
  	  <button type="submit" class="btn" name="delete_event">Törlés</button>
  	</div>
    <div class="input-group">
  	  <button type="submit" class="btn" name="back">Vissza</button>
  	</div>
  </form>
</body>
</html>