const nev_bovebben = document.getElementById('event_name').innerText = events[counter].nev;
const leiras_tobb = document.getElementById('event_desc').innerText = events[counter].leiras;
function nev_tobb() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Bővebben";
      moreText.style.display = "none";
    } else {
      document.getElementById('more').textContent = events[counter].nev;
      dots.style.display = "none";
      btnText.innerHTML = "Kevesebb";
      moreText.style.display = "inline";
    }
  }
function leiras_bovebben() {
    var dots2 = document.getElementById("dots2");
    var moreText2 = document.getElementById("more2");
    var btnText2 = document.getElementById("myBtn2");

    if (dots2.style.display === "none") {
      dots2.style.display = "inline";
      btnText2.innerHTML = "Bővebben";
      moreText2.style.display = "none";
    } else {
      var page = window.open();
      page.document.open();
      page.document.write(events[counter].leiras);
      document.getElementById('more2').innerText = events[counter].leiras;
      btnText2.innerHTML = "Bővebben";
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
    document.getElementById('event_name').innerText = events[counter].nev.substring(0, 20);
    document.getElementById('card_img').src = events[counter].kep;
    document.getElementById('event_date').innerText = events[counter].idopont;
    document.getElementById('event_desc').innerText = events[counter].leiras.substring(0, 20);
    document.getElementById('event_location').innerText = events[counter].helyszin;
    document.getElementById('event_link').href = events[counter].jegylink;    
}



