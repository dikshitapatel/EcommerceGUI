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
  background-image: linear-gradient(to right, orange , red,purple); /* Standard */


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
</div></div>
</div>
<div class="row">

  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left">
            <img class="card-img-top" src="imgs/m1.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Ek Number<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left;">
            <img class="card-img-top" src="imgs/m2.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">69<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left;">
            <img class="card-img-top" src="imgs/m3.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Army Brat<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left;">
            <img class="card-img-top" src="imgs/m4.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Awaara<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
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
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left">
            <img class="card-img-top" src="imgs/m5.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Ayegi Jayegi<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
    <div class="col-sm-3" style="padding: 20px;">
      <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left;">
            <img class="card-img-top" src="imgs/m6.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Biker<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
    </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left;">
            <img class="card-img-top" src="imgs/m7.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Certified Fit<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>
  <div class="col-sm-3" style="padding: 20px;">
    <div class="card border-dark" style="width: 280px;border-color: 1px solid black; padding: 0px; padding-top:0px;text-align: left;">
            <img class="card-img-top" src="imgs/m8.jpg" alt="Card image" style="width:100% ;height: 350PX; padding: 0px;">
            <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Die Ride<br></h4>
      <p class="card-text" style="font-size: 16px;">
        <i class="fa fa-inr" style="font-size:16px;color: black;"></i>
      250.00<br>
        <hr style="padding: 0px;"><hr>
      </p>
     <a href="#" class="text-muted" style="float: left;"><span class="glyphicon glyphicon-shopping-cart" style="color: black;"></span>&nbsp;Add to Cart </a>
      <a href="#" class="text-muted" style="float: right;"><span class="glyphicon glyphicon-th-list" style="color: black;"></span>&nbsp;Details </a>

    </div>

    </div>
  </div>

</div>
</div>
</body>
</html>
