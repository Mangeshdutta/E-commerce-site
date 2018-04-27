<?php
	include('database.php'); 
?>
<?php
	$id = $_GET['id'];
	
	$query = "DELETE FROM `items_table` WHERE items_id = ".$id;
	$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
	mysql_query($conn, $query);
	echo "Item Deleted Successfully";
	header('location:../edititemlist.php');
?>