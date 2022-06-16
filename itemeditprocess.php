<?php
include 'connectiondb.php';
$id=$_POST['id'];
$name=$_POST['name'];
$category=$_POST['category'];
$price=$_POST['price'];
$oldimage= $_POST['oldimage'];
$newimage= $_FILES['newimage']['name'];

if($newimage != ""){
    $updatephoto = $newimage;
    move_uploaded_file($_FILES['newimage']['tmp_name'], "ImagesFile/".$newimage);
}
else{
    $updatephoto = $oldimage;
}

$sql=$db->prepare("UPDATE item SET IID='$id', name='$name',
 category='$category', price='$price', photo='$updatephoto' WHERE IID='$id'");
$sql->execute();
header('Location: viewdata.php');
?>