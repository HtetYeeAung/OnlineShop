<?php 
    include 'adminpanel.php';
?>
<html>
<html>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
  	<div class="container-fluid">
  		<img src="ImagesFile/adminpanelimage.jpg" class="mx-auto d-block" style="width:50%">   
	</div>
	<div class="container-fluid p-2 bg-secondary text-white">
	<h2><center>J & H Online Shop</center></h2>
		<form method="post" action="" enctype="multipart/form-data">
		Enter Product Name : <input type="text" class="form-control" style="width:30%" name="name"> <br>
		Enter Product Category : <input type="text" class="form-control" style="width:30%" name="category"> <br>
		Enter Product Price : <input type="text" class="form-control" style="width:30%" name="price"> <br>
		Upload Photo HERE : <input type="file" class="form-control" style="width:30%" name="image"> <br>
		<input type="submit" class="btn btn-danger" name="submit" value="SUBMIT">
	</form>
	</div>
</body>
</html>
<?php 
    if(isset($_FILES['image'])) {
    $errors = array();
    $filename = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type'];       /**images/png**/
    $fext = explode("/", $filetype);
    $file_ex = strtolower(end($fext));
    $extention = array("jpeg","jpg","png","gif");
    if (in_array($file_ex, $extention)==FALSE) {
        $errors[] = "please upload valid file type";
    }
    else if ($filesize > 2097152){
        $errors[] = "file size is too big";
    }
    else if(empty($errors)==TRUE){
        move_uploaded_file($filetmp, "ImagesFile/".$filename);
        echo "Success!!!";
    }
    else echo $errors;
}
    else return FALSE;

    try {
        include 'connectiondb.php';
        
        $sql="INSERT INTO item(name, category, price, photo) VALUES(?,?,?,?)";
        $sq= $db->prepare($sql);
        
        $name= $_POST['name'];
        $category= $_POST['category'];
        $price= $_POST['price'];
        $photo= $filename;
        
        if($sq->execute(array($name,$category,$price,$photo))) {
            
        }
        
        else echo "FAILED";
        
    } catch (PDOException $e) {
        echo $e->getMessage();
}
        $db=null;
?>