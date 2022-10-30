<?php include('upload-engine.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Esemény feltöltés</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Esemény feltöltés</h2>
  </div>
	
  <form method="post" action="upload.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Esemény neve</label>
  	  <input type="text" name="nev" value="<?php echo $nev; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Kép</label>
  	  <input type="text" name="kep" value="<?php echo $kep; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Időpont</label>
  	  <input type="date" name="idopont" value="<?php echo $idopont; ?>">
  	</div>
  	  	<div class="input-group">
  	  <label>Leírás</label>
  	  <input type="text" name="leiras" value="<?php echo $leiras; ?>">
  	</div>  	
  	<div class="input-group">
  	  <label>Helyszín</label>
  	  <input type="text" name="helyszin" value="<?php echo $helyszin; ?>">
  	</div>  	
  	<div class="input-group">
  	  <label>Esemény típusa</label>
  	  <input type="text" name="event" value="<?php echo $event; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Jegy link</label>
  	  <input type="text" name="jegylink" value="<?php echo $jegylink; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="upload_event">Esemény feltöltése</button>
  	</div>
	<div class="input-group">
    <button type="submit" name="back"  class="btn">Vissza</button>
	</div>
  </form>
</body>
</html>