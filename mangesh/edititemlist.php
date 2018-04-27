<?php
	include('database.php');
?>
<html>
<head>
	<title>Edit Item List</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenuadmin.php');?>
    <div class="side">
    	<h2>Edit Item List</h2><hr/>
        
        	<?php 
        		$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
				$query = "SELECT * FROM `items_table`";
				$queryresult = mysqli_query($conn, $query);
				while($data = mysqli_fetch_array($queryresult))
					{
						$items_id = $data['items_id'];
						$category = $data['category'];
						$item_name = $data['item_name'];
						$item_cost = $data['item_cost'];
						$image = $data['image'];
					
			?>
        <div class="items">
        	<img src="images/<?php echo $image;?>" alt="Image Not Available" />
            <p>Item Id: <?php echo $items_id;?></p>
            <p>Item Name: <?php echo $item_name;?></p>
            <p>Price: <?php echo $item_cost;?></p>
            <p><a href="php/deleteitem.php?id=<?php echo $items_id?>"><input type="submit" value="Delete" onClick="deleteAlert()"/></a></p>
			
        </div>
        <?php
					}
		?>
        
   	</div>
   	
    
</div> <!--main div end-->
</body>
</html>

<script>
	function deleteAlert()
	{
		alert('Item Deleted Successfully');
	}
</script>