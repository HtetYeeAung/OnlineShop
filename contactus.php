<?php

    include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<style>
  	.contactus {
  background: #ffffff;
  padding: 80px 0;
}

.contactus .form-container {
  display: table;
  max-width: 900px;
  width: 90%;
  margin: 0 auto;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

.contactus form {
  display: table-cell;
  width: 400px;
  background-color: #E0FFFF;
  padding: 40px 60px;
  color: #505e6c;
}

.contactus form h2 {
  font-size: 24px;
  line-height: 1.5;
  margin-bottom: 30px;
}

.contactus form .form-control {
  background: transparent;
  border: none;
  border-bottom: 3px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 0px;
  height: 40px;
}

.contactus form .form-check {
  font-size: 13px;
  line-height: 20px;
}

.contactus form .btn-primary {
  background: blue;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 25px;
  text-shadow: none;
  outline: none !important;
}
.contactus form .btn-primary:hover, .register form .btn-primary:active {
  background: blue;
}

.contactus form .btn-primary:active {
  transform: translateY(1px);
}


.contactus form .already {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}

</style>
</head>
<body>
<div class="contactus">
<div class="form-container">
<div class="image-holder"></div>
<form method="post">
<h1 class="text-center"><strong>Contact us</strong></h1>
  



<div class="container mb-3 mt-3">
<label for="name" class="form-label">Enter Your Name:</label>
<input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name"> <br>
<div class="mb-3 mt-3">
<label for="email" class="form-label">Enter Your E-Mail:</label>
<input type="email" class="form-control" id="e-mail" placeholder="Enter Your E-Mail" name="email"> <br>
</div>
<div class="mb-3 mt-3">
<label for="message" class="form-label">Write Your Message:</label>
<input type="message" class="form-control" id="message" placeholder="Write Your Message" name="message"> <br>
</div>
<div class="form-check mb-3">
<label class="form-check-label">
<input class="form-check-input" type="checkbox" name="remember"> Remember me
</label>
</div>
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</body>
</html>