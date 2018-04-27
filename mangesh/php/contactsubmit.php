<?php
	include('database.php');
?>

<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	
	$query = "INSERT INTO `contact_table` (`name`, `email`, `contact`, `address`, `message`) VALUES ('".$name."', '".$email."', '".$contact."', '".$address."', '".$message."')";
	$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
	mysqli_query($conn, $query);
	echo ("Contact Details Added Successfully");
	header('location:../contactus.php');

?>