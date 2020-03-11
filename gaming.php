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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/social.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
<style type="text/css">
  
.frame {
  height: 200px;
  width: 200px;
  overflow: hidden;
}
.zoomin img {
  height: 200px;
  width: 200px;
  -webkit-transition: all 2s ease;
     -moz-transition: all 2s ease;
      -ms-transition: all 2s ease;
          transition: all 2s ease;
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
#header {
   background-color: #f1f1f1;
  padding: 20px;
  color: black;
  text-align: center;
  font-size: 90px; 
  font-weight: bold;
  position: fixed;
  top: 0;
  width: 100%;
  transition: 0.2s;
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
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 230x;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-top: 3px solid blue;
  color: blue;
}

.topnav a.active {
  border-top: 3px solid blue;
}
#caption
{
    text-align: center;
    color: yellow;
    font-size: 15px;
    padding: 2px;
    height: 25px;
  background-color: orange; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, orange , red,purple); /* Standard 


}


</style>
</head>
<body>
<div id="wrapper">
  <div class="fusion-secondary-header" style="border-color: #000000 ;">
  <div class="fusion-row" style="padding-left: 0px;">
    <div class="fusion-align-left" style="padding-left: 0px;">
      <div class="fusion-social-links-header" style="padding-left: 120px; text-align: left;">

        <div class="fusion-social-networks-wrapper" style="padding-left: 0px">
            <a href="#" class="fa fa-facebook" style="padding-top: 5px;"></a>
            <a href="#" class="fa fa-twitter" style="padding-top: 5px;"></a>
            <a href="#" class="fa fa-google" style="padding-top: 5px;"></a>
            <a href="#" class="fa fa-linkedin" style="padding-top: 5px;"></a>
            <a href="#" class="fa fa-youtube" style="padding-top: 5px;"></a>
            <a href="#" class="fa fa-instagram" style="padding-top: 5px;"></a>
            <a href="#" class="fa fa-pinterest" style="padding-top: 5px;"></a>

    <table  style="display: inline-block; float: right; padding-right: 150px;">
          <th><a href="">Careers</a></th>
          <th><a href="">Shopping Cart</a></th>
          <th><a href="">My account</a></th>
          <th><a href="">Cart</a></th>

        </table>

        </div>

      </div>
    </div>

          
  </div>

  </div>
         <div class="span" style="border: 1px solid black" >

<div  class="fusion-row" >
  <div class="row">

    <div class="fusion-logo" data-margin-top="22px" data-margin-bottom="0px" data-margin-left="0px" data-margin-right="0px" style="padding-left: 20px; padding:15px; "  id="logo">
        <a  href="https://www.klassyink.com/">
            <img src="//www.klassyink.com/wp-content/uploads/2017/05/65.png" width="250" height="60" alt="KlassyInk – Buy Online Quirky,Funny,Cool T-shirts for Men and Women" class="fusion-logo-link">
        </a></div>
        <ul style="display: inline-block; padding: 20px; " class="topnav" id="list">
          <li style="border-bottom-color: #ffffff; padding: 5px;font-size: 20px;"><a href="">Home</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">Products</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">Categories</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">Blog</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">Careers</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">Contact Us</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">My Account</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">C</a></li>
          <li style="border-bottom-color: #ffffff;padding: 5px;font-size: 20px;"><a href="">S</a></li>
        </ul>

  </div>
</div>
</div>
<div id="caption"  class="row">
  <p style="text-align: center; padding-left: 45%">
  Home/Shop Full Width/Plain T Shirts</p>
</div>
<div class="row">

  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left">
            <img class="card-img-top" src="imgs/g1.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">36 Ayegi Jayegi<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g2.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">69<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g3.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Alcoholic<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g4.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Anpadh<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>

</div>
<div class="row">

  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left">
            <img class="card-img-top" src="imgs/g5.png" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Apna Drop<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g6.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Army Brat Black<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g7.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Army Brat Maroon<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g8.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Assignment<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>

</div>
<div class="row">

  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left">
            <img class="card-img-top" src="imgs/g9.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Awaara<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g11.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Biker<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g10.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Certified fit Dark milanese<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div><div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g12.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Certified Fit Ligth milanese<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
  
  

</div>
<div class="row">

  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left">
            <img class="card-img-top" src="imgs/g13.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Cycopath<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g14.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Dill with it<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g15.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Drink Pehle<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div><div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 5px; padding-top: 1px;text-align: left;">
            <img class="card-img-top" src="imgs/g16.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 5px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Ek Cutting<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      349.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
  
  

</div>

  
<div class="row" style="background-color: #000000; color: #ffffff;">
  <div class="col" style="text-align: left;"  >
    <h5 style="padding-left: 50px;">COMPANY</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
      <li>>  Company Profile</li>
      <li>>  Meet The Team</li>
      <li>>  Careers</li>
      <li>>  Testimonials</li>
      <li>>  Campus Ambassador</li>
      <li>>  Sell Your Artwork</li>
      <li>>  Win a gift cards</li>
      <li>>  Media/Press</li>
      <li>>  Investor</li>
      <li>>  F.A.Q</li>
      
    </ul>
  </div>
  <div class="col" style="text-align: left;"><h5 style="padding-left: 50px;">NEED HELP??</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
      <li>>  Graphic T-Shirts</li>
      <li>>  Plain T-Shirts</li>
      <li>>  Mobile Covers</li>
      <li>>  Schools and Colleges</li>
      <li>>  Bulk and Custom Orders</li>
      <li>>  Custom Design Orders</li>
      <li>>  Design Studio</li>
      <li>>  NGO and government organisation</li>
      <li>>  Gift Vouchers</li>
      <li>>  Sell Your Artwork</li>
      <li>>  KlassyInk Fan</li>
      <li>>  Sitemap</li>
      
    </ul></div>
  <div class="col" style="text-align: left;">
    <h5 style="padding-left: 50px;">CUSTOMER SUPPORT</h5>
    <ul style="font-size: 17px; list-style-type: none;  text-align: left; word-spacing: 3px;" >
      <li>>  Contact Us</li>
      <li>>  Size Chart</li>
      <li>>  Feedback</li>
      <li>>  Coupon Partners</li>
      <li>>  Track Order</li>
      <li>>  Media Contact</li>
      <li>>  KlassyInk Stores</li>
      <li>>  How it Works</li>
      <li>>  Terms & Conditions</li>
      <li>>  Privacy Policy</li>
      
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
            <a href="#" class="fa fa-facebook" style="padding-top: 5px; background-color: #000000; color: #ffffff; font-weight: bold; font-size: 18px;  border-radius: 0;"></a>
            <a href="#" class="fa fa-twitter" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;"></a>
            <a href="#" class="fa fa-google" style="padding-top: 5px; background-color: #000000; color:#ffffff;font-weight: bold; font-size: 18px; border-radius: 0;"></a>
            <a href="#" class="fa fa-linkedin" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;"></a>
            <a href="#" class="fa fa-youtube" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;"></a>
            <a href="#" class="fa fa-instagram" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;"></a>
            <a href="#" class="fa fa-pinterest" style="padding-top: 5px; background-color: #000000; color: #ffffff;font-weight: bold; font-size: 18px; border-radius: 0;"></a>

  </div>

</footer>
</div>




</body>
</html>