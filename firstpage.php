<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content= "ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="styles-main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  

  
<!--Side Navigation Menu-->
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="topnav">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
  <div class="sidetabs">
  <a href="aboutus.html">About Us</a>
  <a href="events.html">Fundraising Events</a>
  <a href="stories.html">Stories</a>
  <a href="contactus.html">Contact Us</a>
  <a href="reset-password.php">Reset Password</a>
  </div>
  <div class="share" style="padding-top: 100px;">
    <p style="font-family: cursive;padding-bottom: 10px;">Stay Connected</p>
    <a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-youtube"></a><a href="#" class="fa fa-instagram"></a>
  </div>
</div>

   
  
  <div id="main" class="slide">
   <div class="load"></div>
    <div class="container">
        <div class="navigation">
          <div class="navigation-left">
            <button class="login-btn" onclick="document.location.href='http://localhost/project/logout.php'"/><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br>Logout<br></button><a href="donate.html"><button class="donate-btn">Donate</button></a></a href="#"><button class="shop-btn" onclick="document.location.href='http://localhost/project/demo/'">Shop</button></a>
          </div>
        </div>  
        
<div class="slideshow-container" id="m1">
  <div class="mySlides ">
    <i><h1>“We can’t help everyone, but everyone can help someone.”</h1></i>
  <p>― Dr. Loretta Scott</p>
  </div>

<div class="mySlides ">
  <i><h1>“No one has ever become poor by giving.”</h1></i>
  <p>―  Anne Frank</p>
</div>

<div class="mySlides ">
  <i><h1>“Charity begins at home but should not end there.”</h1></i>
  <p>―  Thomas Fuller</p>
</div>

<div class="mySlides ">
  <i><h1>“It's not how much we give but how much love we put into giving.”</h1></i>
  <p>―  Mother Teresa</p>
</div>

<div class="mySlides ">
  <i><h1>“When we give cheerfully and accept gratefully, everyone is blessed.”</h1></i>
  <p>―  Maya Angelou</p>
</div>
</div>

    <!-- Slider -->
  <div class="bullets">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
  </div>
  



  <div class="logo">
     <a href="#"><img src="logo1.PNG" alt="1"></a>
    </div>
    <div class="end">
      <i><strong><a style="color: white;text-decoration: none;" href="transparency.html">Transparency  |</a><a style="color: white;text-decoration: none;" href="privacy%20policy.html">  Privacy Policy  |</a><a style="color: white;text-decoration: none;" href="website%20T&C.html">  Website T&C</a></strong></i>
    </div>
     <div class="end1">
        <a href="https://samistilegal.in/regulatory-overview-for-routes-to-charity-in-india/"><img src="l1.JPG"></a>
    </div>
   <div class="menu">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="menu1.PNG"></span>
  </div>
</div>
</div>
</div>
  <script>
    var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}


function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("m1").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("m1").style.marginLeft = "0";
}


</script>

  
</body>
</html>