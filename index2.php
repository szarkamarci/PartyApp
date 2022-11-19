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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script src="https://kit.fontawesome.com/5a99d1260f.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
</head>
<body>
<header class="wrapper bimage">

    <input type="checkbox" id="show_search">
    <h1 class="logo">BULI APP</h1>
    <h1 class="logo_2">BULI APP</h1>
</header>
<div class="main_dropdown_container">
   
    <div class="dropdown_logo_bar_li" onclick="toggle_bar()" id="toggle_bar" ><i class="fas fa-bars dropdown_logo_bar bar " ></i></div>

    <nav class="navbar_container toggle">
            <div class="main_navbar">
               
                <ul class="main_navbar_ul">
                
                    <li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">Főoldal</a></li>
                    <li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">Kedvencek</a></li>
                    <li class="navbar_level_1_li ">
                        <a href="" class="navbar_level_1_link">Események kezelése</a>
                  
                            <ul class="dropdown_level_1">
                                    <li class="navbar_level_2_li"><a href="upload/upload.php" class="navbar_level_2_link">Feltöltés</a></li>
                                    <li class="navbar_level_2_li"><a href="#" class="navbar_level_2_link">Statisztika</a></li>

                            </ul>
                    </li>
                    </li>
                    <li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">Profil</a></li>
					<li class="navbar_level_1_li"><a href="" class="navbar_level_1_link">Admin Panel</a></li>
          <div class="logout">
					<li class="navbar_level_1_li"><a href="index2.php?logout='1'" class="navbar_level_1_link">Kijelentkezés</a></li>
          </div>
                </ul>

            </div>
    </nav>
</div>
    <div class="external_frame">
      <div class="bad_rated">

        <button type="submit" class="good" name="dislike"><i class="fa-regular fa-heart" aria-hidden="true"></i></i></button>
        <button type="submit" class="good" name="wrong_place"><i class="fa-regular fa-star" aria-hidden="true"></i></i></i></button>
        <button type="submit" class="good" name="wrong_price"><i class="fa-regular fa-circle-xmark" aria-hidden="true"></i></i></i></button>

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
      </div>
      <div class="well_rated">
        <button type="submit" class="good" name="like">><i class="fa-solid fa-heart" aria-hidden="true"></i></i></button>
        <button type="submit" class="good" name="good_place"><i class="fa-solid fa-star" aria-hidden="true"></i></i></button>
        <button type="submit" class="good" name="good_price"><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></i></button>
      </div>
   
    <script type="text/javascript">
      let counter = 0;
      const events = <?php echo json_encode($fetchData); ?>; 
      const good = document.getElementsByClassName('good');
      let event_id = events[counter].id;
      card_infos();
      for (var i = 0; i < good.length; i++) {
        good[i].addEventListener("click", function () {
        counter++;
        event_id = events[counter].id;
        console.log(counter);
        console.log(event_id);
        card_infos();
        });
    }



      
      
        </script>
    </body>
</html>