<html>
<head>
	<title>Contact Us</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenu.php');?>
    <div class="side">
        <h2>Contact Us</h2><hr/>
        <p>Cyber Shopping Pvt Ltd.</p>
        <p>Dillibazar, Kathmandu</p>
        <p>Bagmati, Nepal</p>
        <p>981111111 01-44411111</p>
        <p>cybershopping@gmail.com</p>
   	</div>

    <div class="side">
        <h2>Communicate With Company | Send your Queries or Feedback</h2>
        <p>
            <form method="post" action="php/contactsubmit.php">
                <table>
                    <tr><td>Name: *</td><td><input type="text" name="name" required></td></tr>
                    <tr><td>Email: *</td><td><input type="email" name="email" required></td></tr>
                    <tr><td>Contact Number: *</td><td><input type="text" name="contact" required></td></tr>
                    <tr><td>Address: *</td><td><input type="text" name="address" required></td></tr>
                    <tr><td>Your Message: </td><td><textarea name="message"></textarea></td></tr>
                    <tr><td><input type="submit" value="Mail Us" onclick="contact()" /></td></tr>
                </table>
            </form>

        </p>

    </div>
    
</div> <!--main div end-->
</body>
</html>

<script>
function contact()
{
    alert('Thank you for your queries.');
}
</script>