<?php
include 'adminpanel.php';
include 'connectiondb.php';
$eid = $_GET['eid'];

$sql=$db->prepare("SELECT * FROM item WHERE IID='$eid'");
$sql->execute();

$row=$sql->fetch(PDO::FETCH_ASSOC);
extract($row);
$rephoto = "ImagesFile/".$photo;

?>
    <html>
    	<body>
    		<form method="post" action="itemeditprocess.php" enctype="multipart/form-data">
    			<input type="hidden" name="id" value="<?php echo $IID; ?>">
    			Item Name : <input type="text" name="name" value="<?php echo $name; ?>"><br>
    			Category : <input type="text" name="category" value="<?php echo $category; ?>"><br>
    			Price : <input type="text" name="price" value="<?php echo $price; ?>"><br>
    			<img src="<?php echo $rephoto; ?>" width="50" height="50" >
    			<input type="hidden" name="oldimage" value="<?php echo $photo; ?>">
    			Change Photo  : <input type="file" name="newimage"> <br>
    			<input type="submit" name="submit" value="SUBMIT">
    		</form>
    	</body>
    </html>