<?php
include("events.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Események</th>

         <th>Esemény neve</th>
         <th>Képe</th>
         <th>Időpont</th>
         <th>Leírás</th>
         <th>Helyszín</th>
         <th>Event</th>
         <th>Jegylink</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['nev']??''; ?></td>
      <td><?php echo $data['kep']??''; ?></td>
      <td><?php echo $data['idopont']??''; ?></td>
      <td><?php echo $data['leiras']??''; ?></td>
      <td><?php echo $data['helyszin']??''; ?></td>
      <td><?php echo $data['event']??''; ?></td>
      <td><?php echo $data['jegylink']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
<div class="input-group">
    <button onclick="window.location.href='index.php'"  class="btn">Vissza</button>
</div>
</body>
</html>