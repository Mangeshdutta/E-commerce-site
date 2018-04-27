<?php
	include('database.php');
?>
<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
	$sql2 = mysqli_query($conn, "select * from `admin_login_table` where username ='" . $username .   "'  and password ='" . $password . "' ");
		
							if(mysqli_num_rows($sql2) > 0)
							{
								echo "login successful";
								header('location:../adminhomepage.php');
							}
							else
							{
								header('location:../adminlogin.php');
								echo "login fail";
							}
?>

