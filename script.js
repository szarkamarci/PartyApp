function cim_bovebben() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Több";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Kevesebb";
      moreText.style.display = "inline";
    }
  }
function leiras_bovebben() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Több";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Kevesebb";
      moreText.style.display = "inline";
    }
  }
  let toggle = document.getElementsByClassName('toggle_bar');

  function toggle_bar() {

   let element = document.querySelector(".toggle");
   element.classList.toggle("show")
   
   let element2 = document.querySelector(".bar")
   element2.classList.toggle("bar2")  
  }



function card_infos(){
    document.getElementById('event_name').innerText = events[counter].nev;
    document.getElementById('card_img').src = events[counter].kep;
    document.getElementById('event_date').innerText = events[counter].idopont;
    document.getElementById('event_desc').innerText = events[counter].leiras;
    document.getElementById('event_location').innerText = events[counter].helyszin;
    document.getElementById('event_link').href = events[counter].jegylink;    
}

let btns = document.querySelectorAll('button');

for (i of btns) {
  (function(i) {
    i.addEventListener('click', function() {
      document.querySelector('.msg').innerHTML = i.innerHTML;
    });
  })(i);
}