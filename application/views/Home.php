<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
<html lang="en">
<title>Nangorian's Culinary Obsessed</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="top">
  <div class="bar yellow card">
    <a class="bar-item button padding-large hide-medium hide-large right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="bar-item button padding-large" style="color: white">HOME</a>
    <a href="#about" class="bar-item button padding-large hide-small" style="color: white">ABOUT</a>
    <a href="#gallery" class="bar-item button padding-large hide-small" style="color: white">GALLERY</a>
    <a href="#contact" class="bar-item button padding-large hide-small" style="color: white">CONTACT</a>
    <div class="dropdown-hover hide-small">
      <button class="padding-large button" title="More" style="color: white">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="dropdown-content bar-block card-4">
        <a href="caferesto.html" class="bar-item button">Cafe & Resto</a>
        <a href="recipes.html" class="bar-item button">Food Recipes</a>
        <a href="foodfacts.html" class="bar-item button">Food Fact's</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="padding-large hover-yellow hide-small right" style="color: white"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="bar-block yellow hide hide-large hide-medium top" style="margin-top:46px">
  <a href="#about" class="bar-item button padding-large" onclick="myFunction()" style="color: white">ABOUT</a>
  <a href="#gallery" class="bar-item button padding-large" onclick="myFunction()" style="color: white">GALLERY</a>
  <a href="#contact" class="bar-item button padding-large" onclick="myFunction()" style="color: white">CONTACT</a>
  <a href="#" class="bar-item button padding-large" onclick="myFunction()" style="color: white">MERCH</a>
</div>

<!-- Page content -->
<div class="content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides display-container center">
    <img src="https://rachelskitchen.com/wp-content/uploads/2016/07/chinesechickensalad.jpg" alt="cafe" style="width:100%">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h1>Nangorian's Culinary Obsessed</h3>
      <p><b>Here You Find the Finest Food Catalog in Your Area.</b></p>   
    </div>
  </div>
  <div class="mySlides display-container center">
    <img src="http://thepalateprincess.com/wp-content/uploads/2017/01/Braised-Chicken-Thighs_Featured-Image-Final.jpg" alt="cafe" style="width:100%">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h1>New Nangor Paradise</h3>
      <p><b>One of the best food in this area.</b></p>    
    </div>
  </div>
  <div class="mySlides display-container center">
    <img src="https://simplysattvic.com/wp-content/uploads/2017/04/SS-RETREAT-IN-ubud_Bali_Ubud-prima-food.jpg" alt="cafe" style="width:100%">
    <div class="display-bottommiddle container text-white padding-32 hide-small">
      <h1>So Many Hangout Places</h3>
      <p><b>A Place we won't forget.</b></p>    
    </div>
  </div>

  <!-- Section About -->
  <div class="container white content center padding-64" style="max-width:800px" id="about">
    <h2 class="wide">ABOUT US</h2>
    <p class="opacity"><i>We LOVE foods</i></p>
    <p class="justify">Halo teman-teman semua! Ini adalah website pertama kami. Kami akan terus mencoba untuk memperbarui tampilan dan menambahkan banyak fitur di web ini agar lebih menarik dalam penggunaannya. Tujuan dibuatnya website ini adalah memudahkan para pecinta kuliner khususnya yang berdomisili di wilayah Jatinangor untuk menemukan menu makanan yang sedap. Kami akan merekomendasikan berbagai macam hidangan lezat beserta harga dan tempatnya. Keep calm and eat with love!! 
    </p>
    <div class="row padding-32">
      <div class="third">
        <p>Tivani Shakilla Ervi</p>
        <img src="https://data.whicdn.com/images/309564880/large.png" class="round margin-bottom" alt="Tivani Shakila Ervi" style="width:60%">
      </div>
      <div class="third">
        <p>Ilham Muharam</p>
        <img src="https://avatarfiles.alphacoders.com/466/46621.jpg" class="round margin-bottom" alt="Ilham Muharam" style="width:60%">
      </div>
      <div class="third">
        <p>Alaa Illiyya</p>
        <img src="https://fashionapp.ru/wp-content/uploads/2017/02/smoky-1.jpg" class="round" alt="Allaa Illiyya" style="width:60%">
      </div>
    </div>
  </div>

  <!-- Section Gallery -->
  <div class="blue" id="gallery">
    <div class="container content padding-64" style="max-width:800px">
      <h2 class="wide center">GALLERY</h2>
      <p class="opacity center"><i>You sure you don't want to explore this tempting foods?</i></p><br>

      <ul class="ul border white text-grey">
        <li class="padding">Today's Fav <span class="badge yellow right margin-right">BARAYA</span></li>
        <li class="padding">This Week's Fav <span class="badge yellow right margin-right">COC</span></li>
        <li class="padding">Overall Fav <span class="badge yellow right margin-right">HIPOTESA</span></li>
      </ul>

      <div class="row-padding padding-32" style="margin:0 -16px">
        <div class="third margin-bottom">
          <img src="https://cdn.idntimes.com/content-images/community/2017/07/13150770-1715897122019127-1159264752-n-93c1b8ddbe2d0adbc0d8b88fe0290d02.jpg" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Find a Healthy Breakfast</b></p>
            <p class="opacity">Mon 22 Oct 2018</p>
            <p>Bingung mau sarapan apa? Cari disini</p>
            <button class="button black margin-bottom" onclick="window.location.href='caferesto.html'">Read More...</button>
          </div>
        </div>
        <div class="third margin-bottom">
          <img src="http://suakaonline.com/wp-content/uploads/2017/03/chocolate-changer.png" alt="Jalapeno's Bites" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Rate your Favorite Menu</b></p>
            <p class="opacity">Thu 25 Oct 2018</p>
            <p>Apa menu favoritmu hari ini? Jangan lupa beri rate disini</p>
            <button class="button black margin-bottom" onclick="window.location.href='caferesto.html'">Read More...</button>
          </div>
        </div>
        <div class="third margin-bottom">
          <img src="https://img.qraved.co/v2/image/data/1502100399486-14027280_1816261988605765_1582865440_n-m.jpg" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Resep ala Kosan</b></p>
            <p class="opacity">Mon 29 Oct 2018</p>
            <p>Bingung mau masak apa? Menu andalan hadir disini</p>
            <button class="button black margin-bottom" onclick="window.location.href='recipes.html'">Read More...</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="container content padding-64" style="max-width:800px" id="contact">
    <h2 class="wide center">CONTACT</h2>
    <p class="opacity center"><i>Did you like this website? Drop a note!</i></p>
    <div class="row padding-32">
      <div class="col m6 large margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Jatinangor, SMD<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: tivilaa@mail.com<br>
      </div>
      <div class="col m6">
        <form action="/action_page.php" target="_blank">
          <div class="row-padding" style="margin:0 -16px 8px -16px">
            <div class="half">
              <input class="input border" type="text" placeholder="Name" requiyellow name="Name">
            </div>
            <div class="half">
              <input class="input border" type="text" placeholder="Email" requiyellow name="Email">
            </div>
          </div>
          <input class="input border" type="text" placeholder="Message" requiyellow name="Message">
          <button class="button black section right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- konten selesai -->
</div>

<!-- Image of location/map -->
<img src="https://www.weightlossresources.co.uk/img/h/high_fibre-food.jpg" style="width:100%">

<!-- Footer -->
<footer class="container padding-64 center opacity light-grey xlarge">
  <i class="fa fa-facebook-official hover-opacity"></i>
  <i class="fa fa-instagram hover-opacity"></i>
  <i class="fa fa-snapchat hover-opacity"></i>
  <i class="fa fa-pinterest-p hover-opacity"></i>
  <i class="fa fa-twitter hover-opacity"></i>
  <i class="fa fa-linkedin hover-opacity"></i>
  <p class="medium">It's about Food</p>
</footer>

<script>
// Automatic Slideshow - ganti gambar per 4 detik
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// toggle menu di menu
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("show") == -1) {
        x.className += " show";
    } else { 
        x.className = x.className.replace(" show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var more = document.getElementById('more');
window.onclick = function(event) {
  if (event.target == more) {
    more.style.display = "none";
  }
}
</script>

</body>
</html>
