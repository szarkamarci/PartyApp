<?php include('upload-engine.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Buli App - Esemény feltöltés</title>
  <link rel="stylesheet" type="text/css" href="../css/logreg.css">
</head>
<body>
  <div class="header">
  	<h2>Esemény feltöltés</h2>
  <form method="post" action="upload.php">
  	<?php include('../errors.php'); ?>
  	<div class="txt_field">
		<input type="text" name="nev" value="<?php echo $nev; ?>">
		<span></span>
		<label>Esemény neve</label>
  	</div>
  	<div class="txt_field">
		<input type="text" name="kep" value="<?php echo $kep; ?>">
		<span></span>
		<label>Kép</label>
  	</div>
  	<div class="txt_field">
		<input type="date" name="idopont" value="<?php echo $idopont; ?>">
		<span></span>
		<label>Időpont</label>
  	</div>
  	<div class="txt_field">
  		<input type="text" name="leiras" value="<?php echo $leiras; ?>">
		<span></span>
  		<label>Leírás</label>
  	</div>  	
  	<div class="txt_field">
		<input type="text" name="helyszin" value="<?php echo $helyszin; ?>">
		<span></span>
		<label>Helyszín</label>
  	</div>  	
  	<div class="txt_field">
		<input type="text" name="event" value="<?php echo $event; ?>">
		<span></span>
		<label>Esemény típusa</label>
  	</div>
  	<div class="txt_field">
  	  	<input type="text" name="jegylink" value="<?php echo $jegylink; ?>">
		<span></span>
		<label>Jegy link</label>
  	</div>
  	<button type="submit" class="btn" name="upload_event">Esemény feltöltése</button>
    <button type="submit" name="back"  class="btn">Vissza</button>
  </form>
</div>
</body>
</html>