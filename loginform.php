<?php

    include 'header.php';
    
?>

<html> 
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.login {
  background: yellow;
  padding: 80px 0;
}

.login .image-holder {
  display: table-cell;
  width: auto;
  background: url(ImagesFile/loginimage.jfif);
  background-size: cover;
}

.login .form-container {
  display: table;
  max-width: 900px;
  width: 90%;
  margin: 0 auto;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

.login form {
  display: table-cell;
  width: 400px;
  background-color: #ffffff;
  padding: 40px 60px;
  color: #505e6c;
}

@media (max-width:991px) {
  .login-photo form {
    padding: 40px;
  }
}

.login form h2 {
  font-size: 24px;
  line-height: 1.5;
  margin-bottom: 30px;
}

.login form .form-control {
  background: transparent;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 0px;
  height: 40px;
}

.login form .form-check {
  font-size: 13px;
  line-height: 20px;
}

.login form .btn-primary {
  background: green;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 25px;
  text-shadow: none;
  outline: none !important;
}

.login form .btn-primary:hover, .register form .btn-primary:active {
  background: green;
}

.login form .btn-primary:active {
  transform: translateY(1px);
}

.login form .already {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}
.footer {
  	height: 25%;
  	margin-top: 1px;
  	width: 100%;
  	background-color: #D2691E;
  	color: white;
  	text-align: center;
  	}
</style>
<body>
<div class="login">
<div class="form-container">
<div class="image-holder"></div>
<form method="post">
<h2 class="text-center"><strong>Sign In Your Account</strong></h2>



	
	
		
		
		Enter Email: <input type="text" class="form-control"  name="email" style="width:80%"> <br>
		
		
		Type Your Password: <input type="password" class="form-control" name="p1" style="width:80%" > <br>
<!-- 			Retype Password : <input type="password" name="p2"><br> -->
		<input type="submit" class="btn btn-primary" name="submit" value="Login"><br>
		</form>
</div>
</div>
<div class="footer">
<div class="container">
  		<div class="col-sm-6">
    		<h3>Address</h3>
    			<ul>No.74, Yadanar Street, Khaing Shwe War Baho Road, Kamayut, Yangon</ul>
    	</div>
    	<div class="col-sm-6">
    		<h3>Contact us</h3>
    			<ul>Hotline Number: 09787944998</ul>
    			<ul>Call Center: 0910020033</ul>
    			<ul>E-mail: jhecommercestore@gmail.com</ul>
    	</div>
	</div>    
</div>
</body>
</html>
<?php 
    include 'connectiondb.php';
    $sql=$db->prepare("INSERT INTO user(name,email,phone,password) VALUES(?,?,?,?)"); 
        if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $ph = $_POST['ph'];
        $pwd = $_POST['p1'];
    }
    else return FALSE;
    if($sql->execute(array($uname, $email, $ph, $pwd))) { 
    }
    else echo "FAILED";
?>
