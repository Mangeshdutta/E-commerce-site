
<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		
		
			$conn = mysqli_connect($host,$username,$password) or die ("could not connect" .mysqli_error());
			//mysqli_select_db($conn, "mangesh_cp_db") or die("database doesnot exist");
			if(!mysqli_select_db($conn, "mangesh_cp_db"))
			{
				header("Location: setup.php");
				exit();
			}
			//mysql_select_db("mangesh_cp_db") or die("database doesnot exist");
			
?>