
<html>
<head>
	<title>Add Items</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenuadmin.php');?>
    <div class="side">
    	<h2>Add Items</h2><hr/>
        <form method="post" action="php/additemprocessing.php">
        <table>
        
        	<tr><td>Category: </td><td><select name="category">
                 <option value="Electronics">Electronics</option>
                 <option value="Automobiles">Automobiles</option>
                 <option value="Jewellery">Jewellery</option>
                 <option value="Fashion">Fashion</option>
                 <option value="Film">Film</option>
               </select></td></tr>
             <tr><td>Item Name: </td><td><input type="text" name="item_name" /></td></tr>
             <tr><td>Item Cost: </td><td><input type="text" name="item_cost" /></td></tr>
             <tr><td>Image: </td><td><input type="file" name="image" /></td></tr>
             <tr><td><input type="submit" value="Add Item" onClick="alertFunct()"/></td></tr>
        </form>
        </table>
        
   	</div>
   	
    
</div> <!--main div end-->
</body>
</html>

<script>
function alertFunct()
{
	alert('Item Added Successfully');
}
</script>