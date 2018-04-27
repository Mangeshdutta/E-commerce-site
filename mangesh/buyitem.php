<html>
<head>
	<title>Buy Item Form</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenu.php');?>
    <div class="side">
    	<h2>Enter Details to Buy Product</h2>
        <form action="php/buyitemprocessing.php" method="post">
        <table>
        	<tr><td>Items ID: </td><td><input type="text" name="items_id" value="<?php echo $_GET['id'];?>"  readonly="readonly"/></td></tr>
            <tr><td>Customer Name: </td><td><input type="text" name="customer_name" /></td></tr>
            <tr><td>Customer Address: </td><td><input type="text" name="customer_address" /></td></tr>
            <tr><td>Customer Contact: </td><td><input type="text" name="customer_contact" /></td></tr>
            <tr><td>Date of Purchase: </td><td><input type="text" name="date_of_purchase" value="<?php echo date("y/m/d");?>" readonly="readonly" /></td></tr>
            <tr><td><input type="submit" value="Buy Item" onclick="buyItem()"/></td><td></td></tr>
        </table>
        </form>
   	</div>
    
</div> <!--main div end-->
</body>
</html>

<script>
function buyItem()
{
	alert('Thank you for Purchase. Item will be delivered to your Address');
}
</script>