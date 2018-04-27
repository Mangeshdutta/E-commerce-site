<?php
	include('database.php');
?>
<?php
	$category = $_POST['category'];
	$item_name = $_POST['item_name'];
	$item_cost = $_POST['item_cost'];
	$image = $_POST['image'];
	
	$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
	$query = "INSERT INTO `items_table` (`category`, `item_name`, `item_cost`, `image`) VALUES ('".$category."', '".$item_name."', '".$item_cost."', '".$image."')";
							mysqli_query($conn, $query);
							echo ("Items Added Successfully");
							header('location:../additems.php');
?>