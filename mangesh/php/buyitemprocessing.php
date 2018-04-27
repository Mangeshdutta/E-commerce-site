<?php
	include('database.php');
?>

<?php
	$items_id = $_POST['items_id'];
	$customer_name = $_POST['customer_name'];
	$customer_address = $_POST['customer_address'];
	$customer_contact = $_POST['customer_contact'];
	$date_of_purchase = $_POST['date_of_purchase'];
	
	$query = "INSERT INTO `purchase_table` (`items_id`, `customer_name`, `customer_address`, `customer_contact`, `date_of_purchase`) VALUES ('".$items_id."', '".$customer_name."', '".$customer_address."', '".$customer_contact."', '".$date_of_purchase."')";
	$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
	mysqli_query($conn, $query);
	echo ("Items Bought Successfully");
	header('location:../index.php');

?>