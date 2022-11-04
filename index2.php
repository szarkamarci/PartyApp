<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Jelentkezz be először!";
  	header('location: /buliapp/PartyApp/login/index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: /buliapp/PartyApp/login/index.php');   
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
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile8.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">John Doe</h2>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. sapiente.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">John Doe</h2>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. sapiente.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">John Doe</h2>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. sapiente.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">John Doe</h2>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. sapiente.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="social">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile9.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">John Doe</h2>
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. sapiente.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>
       

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>


        </div>

 
    </body>
    <script src="swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</html>