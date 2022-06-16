<?php 
    include 'adminpanel.php';
    include 'connectiondb.php';
    $sql=$db->prepare("SELECT * FROM item");
    $sql->execute();
?>
<table class="table mt-3"> 
	<th>ID</th>
	<th>Name</th>
	<th>Category</th>
	<th>Price</th>
	<th>Photo</th>
	<th>Edit</th>
	<th>Delete</th>
<?php 
    while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    $img = "ImagesFile/".$photo;
?>
	<tr>
		<td><?php echo $IDD; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $category; ?></td>
		<td><?php echo $price; ?></td>
		<td><img src="<?php echo $img;?>" width="100" height="100"></td>
		<td><a href="itemedit.php?eid=<?php echo $IID; ?>">Edit</a></td>
		<td><a href="delete.php?did=<?php echo $IID; ?>">Delete</a></td>
	</tr>
<?php 
    }
?>
</table>

