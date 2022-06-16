<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style>
  	body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("ImagesFile/headerimage.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(5px);
  
  /* Full height */
  height: 85%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
  	






  
    
    
  
    
    </style>
    </head>
	
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">SHOPPING ONLINE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="aboutus.php">About us</a></li>
      <li class="active"><a href="#">Gallery</a></li>
      <li class="active"><a href="loginform.php">Login</a></li>
      <li class="active"><a href="contactus.php">Contact us</a>
      <li class="active"><a href="feedback.php">Feeback</a>
      <li class="active"><a href="#">My Cart</a>
      
    </ul>
    <a href="registerform.php" button type="button" class="btn btn-warning navbar-btn">Register</a>
    
  </div>
</nav>
</body>

<div class="bg-image"></div>

  <div class="bg-text">
  	<h2>J & H Clothing Shop</h2>
    <h1 style="font-size:50px">Welcome To Clothing Shop</h4>
    <p>Enjoy In Your Shopping...</p>
  </div>



</html>