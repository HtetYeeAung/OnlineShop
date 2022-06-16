<?php
    include 'header.php';
    include 'connectiondb.php';
    $sql=$db->prepare("SELECT * FROM item");
    $sql->execute();
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
    	</head>
    	<style>
    	.container {
    	margin-top: 20px;
    	}
    	</style>
    	<body>
       	<div class="container mt-3">
       		<div class="col-sm-14">
                <!-- display products -->
            <div class="row">
    <?php 
        while($row=$sql->fetch(PDO::FETCH_ASSOC)){
        extract($row);
    ?>
        <div class="col-sm-4" align="center">
        <form method="post" action="manage_cart.php">
        <img src="ImagesFile/<?php echo $photo; ?>" width="150" height="150"><br>
        Product Name : <?php echo $name; ?> <br>
        Price : <?php echo $price; ?> MMks <br>              
        <a href="userviewdata.php" button type="button" class="btn btn-primary" >View Detail</a>
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>">
        <button type="submit" class="btn btn-warning" name="buy">Add To Cart</button>
        <br><br> <bR>
        </form>
        </div>  
       	<?php } ?>
    	</div>
    		</div>
    	</div>
       
    </body>
    </html>
