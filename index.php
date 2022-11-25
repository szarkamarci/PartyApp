<?php 
  include ("card-engine.php");


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
        <script src="script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
</head>
<video autoplay muted loop id="myVideo">
  <source src="background.mp4" type="video/mp4">
</video>
<body>
<header class="wrapper bimage">

    <input type="checkbox" id="show_search">
    <h1 class="logo" >BULI APP</h1>
    <h1 class="logo_2" >BULI APP</h1>
</header>
<div class="main_dropdown_container">
   
    <div class="dropdown_logo_bar_li" onclick="toggle_bar()" id="toggle_bar" ><i class="fas fa-bars dropdown_logo_bar bar " ></i></div>

    <nav class="navbar_container toggle">
            <div class="main_navbar">
               
                <ul class="main_navbar_ul">
                
                    <li class="navbar_level_1_li"><a href="index.php" class="navbar_level_1_link">Főoldal</a></li>
                    <li class="navbar_level_1_li"><a href="favourites/index.php" class="navbar_level_1_link">Kedvencek</a></li>
                    <?php if($_SESSION['rang'] > 0) : ?>
                      <li class="navbar_level_1_li ">  
                        <a href="" class="navbar_level_1_link">Események kezelése</a>
                  
                            <ul class="dropdown_level_1">
                                    <li class="navbar_level_2_li"><a href="upload/index.php" class="navbar_level_2_link">Feltöltés</a></li>
                                    <li class="navbar_level_2_li"><a href="statistics/index.php" class="navbar_level_2_link">Statisztika</a></li>

                            </ul>
                      </li>
                    
                    <?php endif ?>
           <?php if($_SESSION['rang'] > 1) : ?>          
					<li class="navbar_level_1_li"><a href="admin/index.php" class="navbar_level_1_link">Admin Panel</a></li>
          <?php endif ?>
          <div class="logout">
					<li class="navbar_level_1_li"><a href="index.php?logout='1'" class="navbar_level_1_link">Kijelentkezés</a></li>
          </div>
                </ul>

            </div>
    </nav>
</div>
	<!-- LEGSZIVES NE NYULJ HOZZA -->
	<div id="elfogyott" style="display:none;" class="elfogyottesemeny" > elfogyott minden</div>
	
    <div class="external_frame" id="frame">
      <div class="bad_rated">
        <button data-title="Nem tetszik az előadó" type="button" onclick="myFunction(this)" class="good" id="dislike" value="1"><i class="fa-regular fa-heart" aria-hidden="true"></i></i></button>
        <button data-title="Nem tetszik a helyszín" type="button" onclick="myFunction(this)" class="good" id="wrong_place" value="3"><i class="fa-regular fa-star" aria-hidden="true"></i></i></i></button>
        <button data-title="Túl drága" type="button" onclick="myFunction(this)" class="good" id="wrong_price" value="5"><i class="fa-regular fa-circle-xmark" aria-hidden="true"></i></i></i></button>
      </div>

      <div class="card-container">  
          <div class="card-base">
              <div class="card-image">     
                  <img id="card_img" src="" alt="">
              </div>

              <div class="esemeny_nev" >
                <p id ="event_name"></p>
                <span id="dots">...</span><span id="more"></span>
                <button onclick="nev_tobb()" id="myBtn">Bővebben</button>
              </div>

              <div class="esemeny_hely" >
                <p id="event_location"></p>
              </div>
              <div class="esemeny_idopont" >
                <p id="event_date"></p>
              </div>

              <div class="esemeny_leiras" >
                <p id="event_desc"></p>
                <span id="dots2">...</span><span id="more2"></span>
                <button onclick="leiras_bovebben()" id="myBtn2">Bővebben</button>
              </div>

              <div class="esemeny_jegylink">
                  <a id="event_link" href="" target="_blank">
                    <button type="submit"><i class="fa fa-link" aria-hidden="true"></i></button>
                  </a>
              </div>
      </div>
      </div>
      <div class="well_rated">
        <button data-title="Tetszik az előadó" type="button" onclick="myFunction(this)" class="good" id="like"       value="2" ><i class="fa-solid fa-heart" aria-hidden="true"></i></i></button>
        <button data-title="Tetszik a hely" type="button" onclick="myFunction(this)" class="good" id="good_place" value="4" ><i class="fa-solid fa-star" aria-hidden="true"></i></i></button>
        <button data-title="Kedvező ár" type="button" onclick="myFunction(this)" class="good" id="good_price" value="6" ><i class="fa-solid fa-circle-xmark" aria-hidden="true"></i></i></button>
      </div> 
      


    <script type="text/javascript">
	  let good = document.getElementsByClassName('good');
	  let esemenyekosszesen = <?php echo $count_events ?>;
    var keret = document.getElementById("frame");
		var elfogyott = document.getElementById("elfogyott");
      let value = 0;
      const events = <?php echo json_encode($fetchData); ?>;
      let counter = 0;  
      let event_id = events[counter].id;
      const divsToHide = document.getElementsByClassName("card-container");
      card_infos()
      
	  for (var i = 0; i <= esemenyekosszesen; i++) {
		
        good[i].addEventListener("click", function() {
		
	
          
          cssmodositas();
          counter++;
          console.log(counter);
          event_id = events[counter].id; 
          card_infos();

         
          $.post('server.php', {
          btnValue: value,
          event: event_id,
          }, (response) => {
          console.log(response); 
        });
		
        }



		
		
		
			
		
		
      )};
      function cssmodositas(){
        if (counter === esemenyekosszesen-1) {
            keret.style.display = "none";
            elfogyott.style.display = "";
            elfogyott.style.fontSize = "70px";
          }
      }

        </script>
    </body>
</html>
