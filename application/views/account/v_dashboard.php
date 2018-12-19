<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
<html lang="en">
<title>Nangorian's Culinary Obsessed</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <style type="text/css" media="screen">
        html
{
	box-sizing:border-box
} *,*:before,*:after
	{
		box-sizing:inherit
	}

html
{
	-ms-text-size-adjust:100%;
	-webkit-text-size-adjust:100%
}

body
{
	margin:0
}

footer,header,main,menu,nav,section
{
	display:block
}

a
{
	background-color:transparent;
	-webkit-text-decoration-skip:objects
}

a:active,a:hover
{
	outline-width:0
}

img
{
	border-style:none
}

hr
{
	box-sizing:content-box;
	height:0;
	overflow:visible
}

button,input,select
{
	font:inherit;
	margin:0
}

button,input
{
	overflow:visible
}

button,select
{
	text-transform:none
}

button,html [type=button],[type=reset],[type=submit]
{
	-webkit-appearance:button
}

button::-moz-focus-inner, [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner
{
	border-style:none;
	padding:0
}

button:-moz-focusring, [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring
{
	outline:1px dotted ButtonText
}

/*selesai webkit*/

html,body
{
	font-family:Verdana,sans-serif;
	font-size:15px;
	line-height:1.5
}

html
{
	overflow-x:hidden
}

h1
{
	font-size:36px
}

h2
{
	font-size:30px
}

h3
{
	font-size:24px
}

h4
{
	font-size:20px
}

h5
{
	font-size:18px
}

h6
{
	font-size:16px
}

.serif
{
	font-family:serif
}

h1,h2,h3,h4,h5,h6
{
	font-family:"Segoe UI",Arial,sans-serif;
	font-weight:400;
	margin:10px 0
}

.wide
{
	letter-spacing:4px
}

hr
{
	border:0;
	border-top:1px solid #eee;
	margin:20px 0
}

.image
{
	max-width:100%;height:auto
}

img
{
	vertical-align:middle
}

a
{
	color:inherit
}

.table,.table-all
{
	border-collapse:collapse;
	border-spacing:0;
	width:100%;
	display:table
}

.table-all
{
	border:1px solid #ccc
}

.bordeyellow tr,.table-all tr
{
	border-bottom:1px solid #ddd
}

.striped tbody tr:nth-child(even)
{
	background-color:#f1f1f1
}

.table-all tr:nth-child(odd)
{
	background-color:#fff
}

.table-all tr:nth-child(even)
{
	background-color:#f1f1f1
}

.hoverable tbody tr:hover,.ul.hoverable li:hover
{
	background-color:#ccc
}

.centeyellow tr th,.centeyellow tr td
{
	text-align:center
}

.table td,.table th,.table-all td,.table-all th
{
	padding:8px 8px;
	display:table-cell;
	text-align:left;
	vertical-align:top
}

.table th:first-child,.table td:first-child,.table-all th:first-child,.table-all td:first-child
{
	padding-left:16px
}

.btn,.button
{
	border:none;
	display:inline-block;
	padding:8px 16px;
	vertical-align:middle;
	overflow:hidden;
	text-decoration:none;
	color:inherit;
	background-color:inherit;
	text-align:center;
	cursor:pointer;
	white-space:nowrap
}

.btn:hover
{
	box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)
}

.btn,.button
{
	-webkit-touch-callout:none;
	-webkit-user-select:none;
	-khtml-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none
}   

.disabled,.btn:disabled,.button:disabled
{
	cursor:not-allowed;
	opacity:0.3
}

.disabled *,:disabled *
{
	pointer-events:none
}

.btn.disabled:hover,.btn:disabled:hover
{
	box-shadow:none
}

.badge,.tag
{
	background-color:#000;
	color:#fff;
	display:inline-block;
	padding-left:8px;
	padding-right:8px;
	text-align:center
}

.badge
{
	border-radius:50%
}

.ul
{
	list-style-type:none;padding:0;margin:0
}

.ul li
{
	padding:8px 16px;
	border-bottom:1px solid #ddd
}

.ul li:last-child
{
	border-bottom:none
}

.tooltip,.display-container
{
	position:relative
}

.tooltip .text
{
	display:none
}

.tooltip:hover .text
{
	display:inline-block
}

.input
{
	padding:8px;
	display:block;
	border:none;
	border-bottom:1px solid #ccc;
	width:100%
}

.select
{
	padding:9px 0;
	width:100%;
	border:none;
	border-bottom:1px solid #ccc
}

.dropdown-click,.dropdown-hover
{
	position:relative;
	display:inline-block;
	cursor:pointer
}

.dropdown-hover:hover .dropdown-content
{
	display:block
}

.dropdown-hover:first-child,.dropdown-click:hover
{
	background-color:#ccc;
	color:#000
}

.dropdown-hover:hover > .button:first-child,.dropdown-click:hover > .button:first-child
{
	background-color:#ccc;
	color:#000
}

.dropdown-content
{
	cursor:auto;
	color:#000;
	background-color:#fff;
	display:none;
	position:absolute;
	min-width:160px;
	margin:0;
	padding:0;
	z-index:1
}

.sidebar
{
	height:100%;
	width:200px;
	background-color:#fff;
	position:fixed!important;
	z-index:1;
	overflow:auto
}

.bar-block .dropdown-hover,.bar-block .dropdown-click
{
	width:100%
}

.bar-block .dropdown-hover .dropdown-content,.bar-block .dropdown-click .dropdown-content
{
	min-width:100%
}

.bar-block .dropdown-hover .button,.bar-block .dropdown-click .button
{
	width:100%;
	text-align:left;
	padding:8px 16px
}

.bar
{
	width:100%;
	overflow:hidden
}

.center .bar
{
	display:inline-block;
	width:auto
}

.bar .bar-item
{
	padding:8px 16px;
	float:left;
	width:auto;
	border:none;
	display:block;
	outline:0
}

.bar .dropdown-hover,.bar .dropdown-click
{
	position:static;
	float:left
}

.bar .button
{
	white-space:normal
}

.bar-block .bar-item
{
	width:100%;
	display:block;
	padding:8px 16px;
	text-align:left;
	border:none;
	white-space:normal;
	float:none;
	outline:0
}

.bar-block .center .bar-item
{
	text-align:center
}

.block
{
	display:block;
	width:100%
}

.container:after,.container:before,.panel:after,.panel:before,.row:after,.row:before,.row-padding:after,.row-padding:before,
.cell-row:before,.cell-row:after,.clear:after,.clear:before,.bar:before,.bar:after
{
	content:"";
	display:table;
	clear:both
}

.col,.half,.third,.twothird,.threequarter,.quarter
{
	float:left;width:100%
}

@media (min-width:601px)
{
	.col.m1
	{
		width:8.33333%
	}

	.col.m2
	{
		width:16.66666%
	}

	.col.m3,.quarter
	{
		width:24.99999%
	}

	.col.m4,.third
	{
		width:33.33333%
	}

	.col.m5
	{
		width:41.66666%
	}

	.col.m6,.half
	{
		width:49.99999%
	}

	.col.m7
	{
		width:58.33333%
	}

	.col.m8,.twothird
	{
		width:66.66666%
	}
	
	.col.m9,.threequarter
	{
		width:74.99999%
	}

	.col.m10
	{
		width:83.33333%
	}

	.col.m11
	{
		width:91.66666%
	}

	.col.m12
	{
		width:99.99999%
	}
}

.rest
{
	overflow:hidden
}

.content,.auto
{
	margin-left:auto;
	margin-right:auto
}  

.content
{
	max-width:980px
}

.auto
{
	max-width:1140px
}

.hide
{
	display:none!important
}

.show-block,.show
{
	display:block!important
}

.show-inline-block
{
	display:inline-block!important
}

@media (max-width:1205px)
{
	.auto
	{
		max-width:95%
	}
}

@media (max-width:600px)
{
	.modal-content
	{
		margin:0 10px;
		width:auto!important
	}

	.modal
	{
		padding-top:30px
	}
	
	.dropdown-hover.mobile .dropdown-content,.dropdown-click.mobile .dropdown-content
	{
		position:relative
	}

	.hide-small
	{
		display:none!important
	}

	.mobile
	{
		display:block;
		width:100%!important
	}

	.bar-item.mobile,.dropdown-hover.mobile,.dropdown-click.mobile
	{
		text-align:center
	}

	.dropdown-hover .mobile,.dropdown-hover.mobile .btn,.dropdown-hover.mobile .button,.dropdown-click.mobile,.dropdown-click.mobile .btn,.dropdown-click.mobile .button
	{
		width:100%
	}
}

@media (min-width:993px)
{
	.modal-content
	{
		width:900px
	}

	.hide-large
	{
		display:none!important
	}

	.sidebar.w3-collapse
	{
		display:block!important
	}
}

@media (max-width:992px) and (min-width:601px)
{
	.hide-medium
	{
		display:none!important
	}
}

.top,.bottom
{
	position:fixed;
	width:100%;
	z-index:1
}

.top
{
	top:0
}

.bottom
{
	bottom:0
}

.overlay
{
	position:fixed;
	display:none;
	width:100%;
	height:100%;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background-color:rgba(0,0,0,0.5);
	z-index:2
}

.display-topleft
{
	position:absolute;
	left:0;
	top:0
}

.display-topright
{
	position:absolute;
	right:0;
	top:0
}

.display-bottomleft
{
	position:absolute;
	left:0;
	bottom:0
}

.display-bottomright
{
	position:absolute;
	right:0;
	bottom:0
}

.display-middle
{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	-ms-transform:translate(-50%,-50%)
}

.display-left
{
	position:absolute;
	top:50%;
	left:0%;
	transform:translate(0%,-50%);
	-ms-transform:translate(-0%,-50%)
}

.display-right
{
	position:absolute;
	top:50%;
	right:0%;
	transform:translate(0%,-50%);
	-ms-transform:translate(0%,-50%)
}

.display-topmiddle
{
	position:absolute;
	left:50%;
	top:0;
	transform:translate(-50%,0%);
	-ms-transform:translate(-50%,0%)
}

.display-bottommiddle
{
	position:absolute;
	left:50%;bottom:0;
	transform:translate(-50%,0%);
	-ms-transform:translate(-50%,0%)
}

.display-container:hover .display-hover
{
	display:block
}
.display-container:hover span.display-hover
{
	display:inline-block
}

.display-hover
{
	display:none
}

.display-position
{
	position:absolute
}

.circle
{
	border-radius:50%
}

.round-small
{
	border-radius:2px
}

.round,.round-medium
{
	border-radius:4px
}

.round-large
{
	border-radius:8px
}

.round-xlarge
{
	border-radius:16px
}

.round-xxlarge
{
	border-radius:32px
}

.row-padding,.row-padding>.half,.row-padding>.third,.row-padding>.twothird,.row-padding>.threequarter,.row-padding>.quarter,.row-padding>.col
{
	padding:0 8px
}

.container,.panel
{
	padding:0.01em 16px
}

.card,.card-2
{
	box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)
}

.card-4,.hover-shadow:hover
{
	box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)
}

.opacity,.hover-opacity:hover
{
	opacity:0.60
}

.opacity-off,.hover-opacity-off:hover
{
	opacity:1
}

.opacity-max
{
	opacity:0.25
}

.opacity-min
{
	opacity:0.75
}

.tiny
{
	font-size:10px!important
}

.small
{
	font-size:12px!important
}

.medium
{
	font-size:15px!important
}

.large
{
	font-size:18px!important
}

.xlarge
{
	font-size:24px!important
}

.xxlarge
{
	font-size:36px!important
}

.xxxlarge
{
	font-size:48px!important
}

.jumbo
{
	font-size:64px!important
}

.left-align
{
	text-align:left!important
}

.right-align
{
	text-align:right!important
}

.justify
{
	text-align:justify!important
}

.center
{
	text-align:center!important
}

.border-0
{
	border:0!important
}

.border
{
	border:1px solid #ccc!important
}

.border-top
{
	border-top:1px solid #ccc!important
}

.border-bottom
{
	border-bottom:1px solid #ccc!important
}

.border
{
	border-left:1px solid #ccc!important
}

.border-right
{
	border-right:1px solid #ccc!important
}

.section
{
	margin-top:16px!important;
	margin-bottom:16px!important
}

.margin
{
	margin:16px!important
}

.margin-top
{
	margin-top:16px!important
}

.margin-bottom
{
	margin-bottom:16px!important
}

.margin-left
{
	margin-left:16px!important
}

.margin-right
{
	margin-right:16px!important
}

.padding-small
{
	padding:4px 8px!important
}

.padding
{
	padding:8px 16px!important
}

.padding-large
{
	padding:12px 24px!important
}

.padding-32
{
	padding-top:32px!important;
	padding-bottom:32px!important
}

.padding-64
{
	padding-top:64px!important;
	padding-bottom:64px!important
}

.left
{
	float:left!important
}

.right
{
	float:right!important
}

.button:hover
{
	color:#000!important;
	background-color:#ccc!important
}

.transparent,.hover-none:hover
{
	background-color:transparent!important
}

.hover-none:hover
{
	box-shadow:none!important
}

/* Warna */
.blue,.hover-blue:hover
{
	color:#fff!important;
	background-color:#009999!important
}

.yellow,.hover-yellow:hover
{
	color:#fff!important;
	background-color:#ffcc00!important
}

.white,.hover-white:hover
{
	color:#000!important;
	background-color:#fff!important
}

.black,.hover-black:hover
{
	color:#fff!important;
	background-color:#000!important
}

.grey,.hover-grey:hover,.gray,.hover-gray:hover
{
	color:#000!important;
	background-color:#9e9e9e!important
}

.light-grey,.hover-light-grey:hover,.light-gray,.hover-light-gray:hover
{
	color:#000!important;
	background-color:#f1f1f1!important
}

.dark-grey,.hover-dark-grey:hover,.dark-gray,.hover-dark-gray:hover
{
	color:#fff!important;
	background-color:#616161!important
}

.text-white,.hover-text-white:hover
{
	color:#fff!important
}

.text-black,.hover-text-black:hover
{
	color:#000!important
}

.text-grey,.hover-text-grey:hover,.text-gray,.hover-text-gray:hover
{
	color:#757575!important
}

.text-light-grey,.hover-text-light-grey:hover,.text-light-gray,.hover-text-light-gray:hover
{
	color:#f1f1f1!important
}

.text-dark-grey,.hover-text-dark-grey:hover,.text-dark-gray,.hover-text-dark-gray:hover
{
	color:#3a3a3a!important
}

.border-orange,.hover-border-orange:hover
{
	border-color:#ff9800!important
}

.border-blue,.hover-border-blue:hover
{
	border-color:#ff5722!important
}

.border-yellow,.hover-border-yellow:hover
{
	border-color:#f44336!important
}

.border-white,.hover-border-white:hover
{
	border-color:#fff!important
}
    </style>
</head>

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
    <div class="dropdown-hover hide-small">
      <button class="padding-large button" title="More" style="color: white">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="dropdown-content bar-block card-4">
        <a href="#" class="bar-item button">Cafe & Resto</a>
        <a href="#" class="bar-item button">Food Recipes</a>
      </div>
    </div>
     <div class="dropdown-hover hide-small">
      <button class="padding-large button" title="More" style="color: white">LOGIN <i class="fa fa-caret-down"></i></button>     
      <div class="dropdown-content bar-block card-4">
      	<?php echo anchor('login1','Admin'); ?>
      	<br>
      	<?php echo anchor('login','Users'); ?>
      </div>
    </div>
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
        <li class="padding">Overall Fav <span class="badge yellow right margin-right">HIPOPTESA</span></li>
      </ul>

      <div class="row-padding padding-32" style="margin:0 -16px">
        <div class="third margin-bottom">
          <img src="https://cdn.idntimes.com/content-images/community/2017/07/13150770-1715897122019127-1159264752-n-93c1b8ddbe2d0adbc0d8b88fe0290d02.jpg" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Find a Healthy Breakfast</b></p>
            <p class="opacity">Mon 22 Oct 2018</p>
            <p>Bingung mau sarapan apa? Cari disini</p>
            <button class="button black margin-bottom" onclick="window.location.href='#'">Read More...</button>
          </div>
        </div>
        <div class="third margin-bottom">
          <img src="http://suakaonline.com/wp-content/uploads/2017/03/chocolate-changer.png" alt="Jalapeno's Bites" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Your opinions are needed!</b></p>
            <p class="opacity">Thu 25 Oct 2018</p>
            <p>Give us your feedback through the comment section down below!</p>
            <button class="button black margin-bottom" onclick="window.location.href='#'">Read More...</button>
          </div>
        </div>
        <div class="third margin-bottom">
          <img src="https://img.qraved.co/v2/image/data/1502100399486-14027280_1816261988605765_1582865440_n-m.jpg" style="width:100%" class="hover-opacity">
          <div class="container white">
            <p><b>Resep ala Kosan</b></p>
            <p class="opacity">Mon 29 Oct 2018</p>
            <p>Bingung mau masak apa? Menu andalan hadir disini</p>
            <button class="button black margin-bottom" onclick="window.location.href='#'">Read More...</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Image of location/map -->
<img src="http://getwallpapers.com/wallpaper/full/8/2/4/150510.jpg" style="width:100%">

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
