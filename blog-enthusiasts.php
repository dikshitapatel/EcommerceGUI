<?php

include_once "includes/connection.php";
session_start();
if(isset($_SESSION['username']))
{
$username=$_SESSION['username'];

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>KlassyInk - Buy Online Quirky,Funny,Cool T-shirts for Men & Women</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/social.css"><style type="text/css">
  .frame {
  height: 200px;
  width: 200px;

}
.zoomin img {
  height: 200px;
  width: 200px;
  -webkit-transition: all 2s ease;
     -moz-transition: all 2s ease;
      -ms-transition: all 2s ease;
          transition: all 2s ease;
}
ul#list li {
  display:inline;

    font-family: Montserrat, Arial, Helvetica, sans-serif;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0px;
    color:#000000;
    padding:0px;

}
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

a
{
  color: #ffffff;
}
.zoomin img:hover {
  width: 350px;
  height: 250px;
}
.zoom {
  padding: 50px;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}
#primaryheader {
  background-color: #ffffff; /* Grey background */
padding: 5px; /* Some padding */
  color: black;
  text-align: center; /* Centered text */
  font-weight: bold; 
  position: fixed; /* Fixed position - sit on top of the page */
  top: 42px; 
  width: 100%; /* Full width */
  transition: 0.2s;
  z-index: 2000; 
  border-color: 3px solid black;
  height: 115px;
  border-top-color: #000000;
   /* Add a transition effect (when scrolling - and font size is decreased) */
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
th
{
    padding: 10px;
    font-size: 1em;
}
li
{
  padding: 15px;
    border-bottom: 1px solid grey;

}
.topnav {
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  border-bottom: 3px solid transparent;
  padding-bottom: 2px;
  z-index: 1000;  
  position: relative;
  padding: 9px;
  padding-left: 30px;
  padding-top: 22px;
}

.navbar a:hover {
  border-top: 3px solid blue;
  color: blue;
  padding-top: 8px;
}


.navbar {
  background-color: transparent;

}
.navbar a:active
{
  border-top: 3px solid blue;

}

.navbar a {
  float: left;
  font-size: 20px;
  color: black;
i  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;

}

.dropbtn {
  background-color: transparent;
  color: black;
  padding: 4px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  padding-top: 50px;
  position: inline;
  font-weight: bold;
}

.dropdown {
  position: relative;
  display: inline-block;
  padding-top: : 0px;
  text-align: center;
  top:-24px;
  padding: 2px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffe500;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
  z-index: 1;
}

.dropdown-content a {
  text-align: left;
  color: black;
  padding: 16px 20px;
  text-decoration: none;
  display: block;
  font-size: 15px;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: transparent;
}
#caption
{
    text-align: center;
    color: yellow;
    font-size: 15px;
    padding: 2px;
    height: 25px;
  background-color: orange; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, orange , red,purple); /* Standard */


}
.search {
  width: 250px;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  height: 36px;
  border: 2px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}



.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid black;
  background: black;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}



</style>
</head>
<body>
<div id="wrapper">
  <div class="fusion-secondary-header" style="border-color: #000000 ;overflow: hidden;">
  <div class="fusion-row" style="padding-left: 0px;">
    <div class="fusion-align-left" style="padding-left: 0px;">
      <div class="fusion-social-links-header" style="padding-left: 120px; text-align: left;">

        <div class="fusion-social-networks-wrapper" style="padding-left: 0px">
            <a href="https://www.facebook.com" class="fa fa-facebook" style="padding-top: 5px;" title="Facebook"></a>
            <a href="https://www.twitter.com" class="fa fa-twitter" style="padding-top: 5px;" title="Twitter"></a>
            <a href="https://www.google.com" class="fa fa-google" style="padding-top: 5px;" title="Google"></a>
            <a href="https://www.linkedin.com" class="fa fa-linkedin" style="padding-top: 5px;" title="Linkedin"></a>
            <a href="https://www.youtube.com" class="fa fa-youtube" style="padding-top: 5px;" title="Youtube"></a>
            <a href="https://www.instagram.cm" class="fa fa-instagram" style="padding-top: 5px;" title="Instagram"></a>
            <a href="https://www.pininterest.com" class="fa fa-pinterest" style="padding-top: 5px;" title="Pinterest"></a>        

         <a href="" style="color: black;padding-left: 500px;padding-right: 10px;font-weight: bolder;">Careers</a>
          <a href="" style="color: black;padding-right: 10px;font-weight: bolder;">Shopping Cart</a>
          <a href="" style="color: black;padding-right: 10px;font-weight: bolder;">My Account</a>

         <a href="" style="color: black;padding-right: 10px;font-weight: bolder;"><button style="width: 150px;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;&nbsp;Cart</button></a>
        

</div>
      </div>
    </div>

          
  </div>

  </div>
<div id="primaryheader"  >
<div class="navbar" id="text" style="border-bottom-color: #000000;" >
<img src="imgs/logo.png" style="float: left;padding-left: 100px;" id="logo" >

          <a href="index.php"  >Home    </a>
<div class="dropdown" >
    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tshirt-category.php">Graphic T-Shirts</a>
      <a href="plain-t-shirts.php">Plain T-Shirts</a>
      <a href="mobile_cover.php">Mobile-Cover</a>
      <a href="plain-t-shirts.php">Custom-Design</a>

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Categories 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tshirt-category.php"> T-Shirts</a>
      <a href="mobile_cover.php">Mobile Cover</a>
    
    </div>
  </div>           

          <a href="klassyink-blog.php">Blog</a>
          <a href="careers.php">Careers</a>
          <a href="contact.php">Contact Us</a>
<div class="dropdown">
    <button class="dropbtn">My Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" style="width:220px;height: 200px;padding:20px">
        <form method="POST" action="login_val.php">

      <input type="text" name="login" placeholder="Username" required><br><br>
      <input type="password" name="password" placeholder="Password" required><br><br>
      <input type="submit" name="login_user" value="Login" style="background-color: blue;color: white;padding:5px;width: 80px;float: right;"><br><br></form>
      <a href="register.php" style="font-size: 14px;color: black;float: right; ">Register</a>
    
    </div>
  </div>          
  <a href="#"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span></a>
          <a href="#"><span class="glyphicon glyphicon-search" style="color: black;"></span></a>
       
</div>

</div>
<script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("primaryheader").style.top = "0px";


    } else {
        document.getElementById("primaryheader").style.top = "42px";

  }
}
</script>
<div style="padding-top: 113px;">
<div id="caption"  class="row">
  <p style="text-align: center; padding-left: 45%">
  SHOUT OUT TO ASPIRING CREATIVE ENTHUSIASTS</p>
</div></div>

<div class="row">
  <div class="col-sm-8" style="padding-left: 110px;">
    <img src="imgs/blog4.jpg" alt="sorry" style="width: 850px;height: 550px;padding: 20px;">

    <h3 style="text-align: left; font-weight: bold;">SHOUT OUT TO ASPIRING CREATIVE ENTHUSIASTS!
</h3>
    <h2 style="color: red; font-weight: bold;">SHOUT OUT TO ASPIRING CREATIVE ENTHUSIASTS!


<br></h2><br>
    <p style="text-align: left;font-size: 18px;line-height: 1.5; font-weight: lighter;">
      KlassyInk.com, India’s fastest growing casual fashion and merchandise wear brand is at the forefront of a major shift in the fashionise industry. Come, be a part of this revolution. We are looking for Impressive Interns!

We’re building Great Things that can Change the Face of Fashion,merchandise and we need your Talent!
<br>
Aspiring Intern<br><br>

1.Must Love Design.Fashion.Challenges.Bournvita<br><br>


2. Must Have Passion. Out of the Box Ideas. High energy<br><br>


3. Must Want To shoot for the stars<br><br>


Join a tight knit, fast paced, forward thinking team of doers. We happen to be hiring:Fashion Designers<br><br>


1. Stylists<br><br>
2. Graphic designers<br><br>
If you think you are so incredible we can’t ignore, we’d love to hear from you. If you think you know someone who may fit the bill, pass on the good message!.com, India’s fastest growing casual fashion wear brand is at the forefront of a major shift in the fashion industry. Come, be a part of this revolution. We are looking for Impressive Interns!
<br><br>
We’re building Great Things that can Change the Face of Fashion and we need your Talent!
Aspiring Interns<br><br>

1. Must Love Design.Fashion.Challenges.Bournvita<br><br>

2. Must Have Passion. Out of the Box Ideas. High energy<br><br>

3. Must Want To shoot for the stars<br><br>

Join a tight knit, fast paced, forward thinking team of doers. We happen to be hiring:
<br><br>
1.Fashion Designers<br><br>
2. Stylists<br><br>
3. Graphic designers
<br><br>
    </p>
 


 </div>

 
  
<div class="col-4" style="text-align: left;">
        <div class="wrap" style="text-align: left; padding-left:0px;">
   <div class="search" style="padding: 70px;">
      <input type="text" class="searchTerm" placeholder="What are you looking for?" style="height: 36px; width: 350px;">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
<div style="padding-left: 70px;">
  <div class="panel panel-default" style="width: 300px; ;">
    <div class="panel-heading" style="height: 50px;padding:5px;padding-left: 15px;">
     <ul style="display: inline-block; padding-left: 0px;padding-right: 0px;">
          <li style="display: inline-block; padding: 15px ;font-size:18px; font-weight: bold; border-bottom-color:transparent;"><a href="">Popular</a></li>
          <li style="display: inline-block;padding: 15px;font-size:18px; font-weight: bold;border-bottom-color: transparent;"><a href="">Recent</a></li>
          <li style="display: inline-block;padding: 15px;font-size:18px; font-weight: bold;border-bottom-color: transparent;"><a href=""><i class='far fa-comments'></i></a></li>
       </ul> 
    </div>
    <div class="panel-body">
      
      <div class="row">
        <div class="col" style="padding: 5px; width: 10px;">
        <img src="imgs/bookblog.jpg" style="width: 60px;height: 50px;" align="left">
          <a href="#" style="color: black;font-size: 16px; line-height: 2">KlassyInk GETS FEATURED IN THE 'Ideapreneur India E-Magazine' </a>
          <br>
          <small class="text-muted">September 9th,2015</small>
        <hr></div></div>
        <div class="row">
        <div class="col" style="padding: 5px;">
        <img src="imgs/blog3.jpg" style="width: 60px;height: 50px;" align="left">
          <a href="#" style="color: black;font-size: 16px; line-height: 2">THE STORY BEHIND OUR LOGO COLOR! </a>
          <br>
          <small class="text-muted">September 9th,2015</small>
        <hr></div></div>
        <div class="row">
        <div class="col" style="padding: 5px;">
        <img src="imgs/blog1.jpg" style="width: 60px;height: 50px;" align="left">
          <a href="#" style="color: black;font-size: 16px; line-height: 2">HOW KLASSYINK GOT ITS NAME! </a>
          <br>
          <small class="text-muted">September 9th,2015</small>
        <hr></div></div>
      
      
    </div>
  </div></div>
  <details style="padding-left: 70px; font-size: 16px; font-weight: bold; line-height: 2">
  <summary>Our Company Mission.</summary>
  <p style="padding-right: 180px; font-weight: lighter;"> ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar </p>
</details>
<details style="padding-left: 70px; font-size: 16px; font-weight: bold;">
  <summary>The ghatkoparPhilosophy</summary>
  <p style="padding-right: 180px; font-weight: lighter;"> ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar </p>
</details>
<details style="padding-left: 70px; font-size: 16px; font-weight: bold; line-height: 2">
  <summary>The ghatkoparPromise.</summary>
  <p style="padding-right: 180px; font-weight: lighter;"> ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar </p>
</details>
<details style="padding-left: 70px; font-size: 16px; font-weight: bold;">
  <summary>We Can Deliver On Projects</summary>
  <p style="padding-right: 180px; font-weight: lighter;"> ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar </p>
</details>
<br><br>
<div class="col" style="text-align: left;"><h4 style="padding-left: 50px;">NEED HELP??</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;padding-right: 100px" >
      <li>  <P>HOW KLASSYINK GOT    ITS NAME!</P></li>
      <li> KLASSYINK GETS FEATURED IN THE 'Ideapreneur India E-Magazine'</li>
      <li> THE STORY BEHIND OUR LOGO COLOUR</li>
      <li> SHOUT OUT TO ASPIRING CRETIVE ENTHUSIASTS</li>
      
      
    </ul></div>
    <div class="col" style="text-align: left;"><h4 style="padding-left: 50px;">Contact Info</h5>
    <p style="font-size: 17px;padding-left:50px;padding-right: 120px;">
      ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar ghatkopar
      Phone: 999999999999
      Fax: 999999999999
      Email: info@ghatkopar .com
      Web: ghatkopar ghatkopar .com
    </p>
      </div>
    <div class="row" style="padding-left: 10px; padding-right: 120px;">
    <div class="col" style="text-align: left;"  >
    <h5 style="padding-left: 50px;">Categories</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
      <li>>  Creative</li>
      <li>>  Design</li>
      <li>>  Careers</li>
      <li>>  Fashion</li>
      <li>>  Markup</li>
      <li>>  News</li>
      <li>>  Special Offers</li>
      <li>>  Trends</li>
      <li>>  Videos</li>
      
    </ul>
  </div>

  </div>
  <h3   style="padding-left: 50px">Tags</h3>
  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<button>Klassyink</button>
  <button>Klassyink Brand</button>
  <button>tshirt</button>
  <br><br>
<div class="row" style="padding-left: 60px;">
  <div class="panel panel-default" style="width: 300px; ;">
    <div class="panel-heading" style="height: 50px;padding:5px;padding-left: 15px;">
     <ul style="display: inline-block; padding-left: 0px;padding-right: 0px;">
          <li style="display: inline-block; padding: 15px ;font-size:18px; font-weight: bold; border-bottom-color:transparent;"><a href="">Popular</a></li>
          <li style="display: inline-block;padding: 15px;font-size:18px; font-weight: bold;border-bottom-color: transparent;"><a href="">Recent</a></li>
          <li style="display: inline-block;padding: 15px;font-size:18px; font-weight: bold;border-bottom-color: transparent;"><a href=""><i class='far fa-comments'></i></a></li>
       </ul> 
    </div>
    <div class="panel-body">
      
      <div class="row">
        <div class="col" style="padding: 5px; width: 10px;">
        <img src="imgs/bookblog.jpg" style="width: 60px;height: 50px;" align="left">
          <a href="#" style="color: black;font-size: 16px; line-height: 2">KlassyInk GETS FEATURED IN THE 'Ideapreneur India E-Magazine' </a>
          <br>
          <small class="text-muted">September 9th,2015</small>
        <hr></div></div>
        <div class="row">
        <div class="col" style="padding: 5px;">
        <img src="imgs/blog3.jpg" style="width: 60px;height: 50px;" align="left">
          <a href="#" style="color: black;font-size: 16px; line-height: 2">THE STORY BEHIND OUR LOGO COLOR! </a>
          <br>
          <small class="text-muted">September 9th,2015</small>
        <hr></div></div>
        <div class="row">
        <div class="col" style="padding: 5px;">
        <img src="imgs/blog1.jpg" style="width: 60px;height: 50px;" align="left">
          <a href="#" style="color: black;font-size: 16px; line-height: 2">HOW KLASSYINK GOT ITS NAME! </a>
          <br>
          <small class="text-muted">September 9th,2015</small>
        <hr></div></div>
      
      
    </div>
  </div>
</div>
<img src="imgs/freeshipping.webp" alt="sorry" style="padding: 50px; width: 90%;">
</h4></div></h4></div></div></div> 

  

  
<div class="row" style="background-color: #000000; color: #ffffff;">
  <div class="col" style="text-align: left;"  >
    <h5 style="padding-left: 50px;">COMPANY</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
      <a href="about-us.php"><li>>  Company Profile</li></a>
     <a href="meet-the-team.php"> <li>>  Meet The Team</li></a>
      <a href="careers.php"><li>>  Careers</li></a>
      <a href="testimonials.php"><li>>  Testimonials</li></a>
      <a href="campus-ambassador.php"><li>>  Campus Ambassador</li></a>
      <a href="artwork.php"><li>>  Sell Your Artwork</li></a>
      <a href="gift-card.php"><li>>  Win a gift cards</li></a>
      <a href="media.php"><li>>  Media/Press</li></a>
      <a href="investor.php"><li>>  Investor</li></a>
     <a href="faq.php"> <li>>  F.A.Q</li></a>
      
    </ul>
  </div>
  <div class="col" style="text-align: left;"><h5 style="padding-left: 50px;">NEED HELP??</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
      <a href="footershirts.php"><li>>  Graphic T-Shirts</li></a>
     <a href="footershirts"> <li>>  Plain T-Shirts</li></a>
      <a href="footershirts.php"><li>>  Mobile Covers</li></a>
      <a href="college.php"><li>>  Schools and Colleges</li></a>
      <a href="#"><li>>  Bulk and Custom Orders</li></a>
      <a href="#"><li>>  Custom Design Orders</li></a>
      <a href="#"><li>>  Design Studio</li></a>
      <a href="#"><li>>  NGO and government organisation</li></a>
      <a href="#"><li>>  Gift Vouchers</li></a>
      <a href="#"><li>>  Sell Your Artwork</li></a>
      <a href="#"><li>>  KlassyInk Fan</li></a>
      <a href="sitemap.php"><li>>  Sitemap</li></a>
      
    </ul></div>
  <div class="col" style="text-align: left;">
    <h5 style="padding-left: 50px;">CUSTOMER SUPPORT</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
     <a href="contact.php"> <li>>  Contact Us</li></a>
      <a href="sizechart.php">  <li>>  Size Chart</li></a>
      <a href="feedback.php">  <li>>  Feedback</li></a>
       <a href="coupon.php"> <li>>  Coupon Partners</li></a>
      <a href="trackorder.php">  <li>>  Track Order</li></a>
       <a href="media.php"> <li>>  Media Contact</li></a>
       <a href="franchise.php"> <li>>  KlassyInk Stores</li></a>
       <a href="howitworks.php"> <li>>  How it Works</li></a>
       <a href="t&c.php"> <li>>  Terms & Conditions</li></a>
       <a href="privacypolicy.php"> <li>>  Privacy Policy</li></a>
      
    </ul>
  </div>
  <div class="col" style="text-align: left;">
    <h5 style="padding-left: 50px;">SIGN UP FOR OUR NEWS LETTER!</h5>
    <br><br>
    <h4>info@klassyink.com</h4>
    <form action="#" method="POST" style="text-align: left">
    <input type="text" name="email2" placeholder="info@klassyink.com"><br><br>
    <input type="submit" name="send" value="Sign Up" style="width:80px; height: 30px; color: #000000">
  </form>
  <br><br>
  <h4>Get Social</h4>
  <div class="fusion-social-networks-wrapper" style="padding-left: 0px; text-align: left; ">
            <a href="#" class="fa fa-facebook" style="padding-top: 5px; background-color: transparent; color: #ffffff; font-weight: bold; font-size: 15px;"></a>
            <a href="#" class="fa fa-twitter" style="padding-top: 5px; background-color: transparent; color: #ffffff;font-weight: bold; font-size: 15px;"></a>
            <a href="#" class="fa fa-google" style="padding-top: 5px; background-color: transparent; color:#ffffff;font-weight: bold; font-size: 15px;"></a>
            <a href="#" class="fa fa-linkedin" style="padding-top: 5px; background-color: transparent; color: #ffffff;font-weight: bold; font-size: 15px;"></a>
            <a href="#" class="fa fa-youtube" style="padding-top: 5px; background-color: transparent; color: #ffffff;font-weight: bold; font-size: 15px;"></a>
            <a href="#" class="fa fa-instagram" style="padding-top: 5px; background-color: transparent; color: #ffffff;font-weight: bold; font-size: 15px;"></a>
            <a href="#" class="fa fa-pinterest" style="padding-top: 5px; background-color: transparent; color: #ffffff;font-weight: bold; font-size: 15px;"></a>

  </div>


  </div>
</div>
<footer id="footer" class="fusion-footer-copyright-area fusion-footer-copyright-center" style="background-color: #4b4c4d; color: #ffffff;">
              <div class="fusion-row">
                <div class="fusion-copyright-content">

                      <div class="fusion-copyright-notice">
      <div>© Copyright 2015 -&nbsp;<script>document.write(new Date().getFullYear());</script>2019&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;All Rights Reserved |&nbsp;KlassyInk.com &nbsp;<p></p><p>KlassyInk is India's coolest youth lifestyle brand. We are irreverent, desi, fun &amp; forever young. This is the underlying philosophy when we create content, products and services. Using popular culture, emerging trends, design &amp; cultural insights we seek to be a platform for all things that the young relate to.   </p><p>
All artwork posted on this site is intended as fan art and is not purported to be official merchandise unless indicated otherwise. If you have any issues regarding the artwork do write to us at info@klassyink.com</p><img src="https://www.klassyink.com/wp-content/uploads/2017/05/klassyinkfooterr.png" alt="logo_footer" width="155 px" height="38 px" class=""><p></p></div></div></div></div>
<div class="fusion-social-networks-wrapper" style="padding-left: 0px; text-align: center; ">
            <a href="https://www.facebook.com" class="fa fa-facebook" style="padding-top: 5px; background-color: #000000; color: #ffffff; font-weight: bold; font-size: 18px;  border-radius: 0;" title="Facebook"></a>
            <a href="https://www.twitter.com" class="fa fa-twitter" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;" title="Twitter"></a>
            <a href="https://www.google.com" class="fa fa-google" style="padding-top: 5px; background-color: #000000; color:#ffffff;font-weight: bold; font-size: 18px; border-radius: 0;" title="google"></a>
            <a href="https://www.linkedin.com" class="fa fa-linkedin" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;" title="Linkedin"></a>
            <a href="https://www.youtube.com" class="fa fa-youtube" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;" title="Youtube"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;" title="Instagram"></a>
            <a href="https://www.pininterest.com" class="fa fa-pinterest" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;" title="Pinterest"></a>

  </div>

</footer>
</div>




</body>
</html>