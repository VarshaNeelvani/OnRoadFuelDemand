<html>
  <head>
    <title>user home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow:hidden ;
  margin:10;
  padding:0;
  background-color: #82E0AA; 
}

.topnav a {
  float: left;
  border-right:1px solid #bbb;
  color: white;
  text-align: center;
 padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #641E16 ;
  color: white;
}

.topnav a.active {
  background-color:#641E16;
  color: white;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  max-height:1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 10px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

  </head>
 <body background="bg.jpeg" style="background-repeat:no-repeat;background-size:100% 99%;">
<center>
<h1 style = "font-family: Georgia, serif;" ><font color="black">ON ROAD FUEL DEMAND APPLICATION</font color></h1><br/>
<h2><marquee direction="left"><font color="#2874A6">"On-road fuel supply applications for developing on-demand fuel supplies depend on user orders and
requirements."</font color></marquee></h2><br/>
<div class="topnav">
  <a class="active" href="userhomepage.php">Home</a>
  <a href="fuelstation.php"> Fuel Station</a>
  <a href="myenquiry.php"> My Enquiry</a>
  <a href="about.php">About</a>
  <a href="logout.php">Log out</a>
</div>
<br/>
<br/></center>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
 <center> <img src="onroad.jpeg" style="width:100%" ></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <center><img src="onroad2.jpeg" style="width:100%" ></center>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
 <center> <img src="onroad3.jpeg" style="width:100%"> </center>
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<h4> &nbsp &nbsp &nbsp  > Due to growth of automobiles in market, fuel consumption became more.  In existing systm, unfortunately because of some reason if vehicle stops due to lack of petrol, it will be very hard &nbsp for the owner to push the vehicle to the nearest petrol pump.</h4>
<h4> &nbsp &nbsp &nbsp  > In this application three modules using user, fuel station, admin. Admin can verify Fuel Station details, then it will see user modules. Fuel Station can add their branch information like &nbsp address and google map geo location and kind of fuel provide.</h4>
<h4> &nbsp &nbsp &nbsp  > User can search by locality or station name and book the fuel on online app. Our objective develop using angular java script and MySQL as our backend database with responsive applicaion.
<br/>
</body>
</html >