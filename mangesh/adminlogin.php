
<html>
<head>
	<title>Admin Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenu.php');?>
    <div class="side">
    
        <h2>Enter Login Details</h2><hr/>
        <form method="post" action="php/adminloginprocessing.php">
            <p>Username: <input type="text" name="username" value="admin" /> </p>
            <p>Password: <input type="password" name="password" value="admin" /></p>
            <p><input type="submit" value="Admin Login"</p>
            
        </form>
   	</div>
   	
    
</div> <!--main div end-->
</body>
</html>