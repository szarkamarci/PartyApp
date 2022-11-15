<?php 
  include ("events.php");
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Jelentkezz be először!";
  	header('location: login/index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: login/index.php');   
  }
  function role($permission) {
	if($permission == 0){
	  return " [Tag] ";
	}elseif($permission == 1) {
	  return " [Szervező] ";
	}elseif($permission == 2) {
	  return " [Admin] ";
	} 
  }

?>

<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PartyApp - Főoldal</title>
        <link rel="stylesheet" href="swiper-bundle.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://kit.fontawesome.com/5a99d1260f.js" crossorigin="anonymous"></script>

                                        
    </head>
    <body>
    <div id="container">

        <nav>
        <div id="logo">
            BuliApp
        </div>
        <ul>
            <li><a href="#">Főoldal</a></li>
            <li><a href="#">Kedvencek</a></li>
            <li><a href="#">Profil</a></li>
            <li class="dropdown" onmouseover="hover(this);" onmouseout="out(this);"><a href="#">Események kezelése &nbsp;<i class="fa fa-caret-down"></i></a>
            <div class="dd">
                <div id="up_arrow"></div>
            <ul>

                <li><a href="upload/upload.php">Feltöltés</a></li>
                <li><a href="#">Statisztika</a></li>
            </ul>
            </div>
            </li>
            <li><a href="#">Admin panel</a></li>
            <li><a href="index2.php?logout='1'">Kijelentkezés</a></li>
        </nav>
    </div>

    <div class="external_frame">
      <div class="bad_rated">
        <button type="submit" id="good"><i class="fa-regular fa-heart" aria-hidden="true"></i></i></button>
        <button type="submit" id="bad"><i class="fa-regular fa-star" aria-hidden="true"></i></i></i></button>
        <button type="submit" id="bad"><i class="fa-regular fa-circle-xmark" aria-hidden="true"></i></i></i></button>
      </div>

      <div class="card-container">
          <div class="card-base">
              <div class="card-image">     
                  <img id="card_img" src="" alt="">
              </div>

              <div class="esemeny_nev" >
                <p id ="event_name"></p>
              </div>

              <div class="esemeny_hely" >
                <p id="event_location"></p>
              </div>
              <div class="esemeny_idopont" >
                <p id="event_date"></p>
              </div>

              <div class="esemeny_leiras" >
                <p id="event_desc"></p>
              </div>

              <div class="esemeny_jegylink">
                  <a id="event_link" href="" target="_blank">
                    <button type="submit"><i class="fa fa-link" aria-hidden="true"></i></button>
                  </a>
              </div>
      </div>
      <div class="well_rated">
        <button type="submit" id="g"><i class="fa-solid fa-heart" aria-hidden="true"></i></i></button>
        <button type="submit" id="god"><i class="fa-solid fa-star" aria-hidden="true"></i></i></button>
        <button type="submit" id="gd"><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></i></button>
      </div>
    </div>
    <script type="text/javascript">
      let counter = 0;
      const events = <?php echo json_encode($fetchData); ?>; 
      const good = document.getElementById('good');
      document.getElementById('event_name').innerText = events[counter].nev;
      document.getElementById('card_img').src = events[counter].kep;
      document.getElementById('event_date').innerText = events[counter].idopont;
      document.getElementById('event_desc').innerText = events[counter].leiras;
      document.getElementById('event_location').innerText = events[counter].helyszin;
      document.getElementById('event_link').href = events[counter].jegylink;
      good.addEventListener('click', (e) => {
      counter++;
      console.log(counter);
      document.getElementById('event_name').innerText = events[counter].nev;
      document.getElementById('card_img').src = events[counter].kep;
      document.getElementById('event_date').innerText = events[counter].idopont;
      document.getElementById('event_desc').innerText = events[counter].leiras;
      document.getElementById('event_location').innerText = events[counter].helyszin;
      document.getElementById('event_link').href = events[counter].jegylink;});

      
        </script>
    </body>
</html>