<?php
	include('database.php');
?>
<html>
<head>
	<title>Index</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenu.php');?>
    <div class="side">
        <h2>Home Page</h2>
        <h3>All Items Lists</h3><hr/>
        <?php
        		$conn = mysqli_connect("localhost","root","","mangesh_cp_db");
                $sql = mysqli_query($conn, "SELECT * FROM items_table"); 
				while($data = mysqli_fetch_array($sql))
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
            <p><a href="buyitem.php?id=<?php echo $items_id;?> "><input type="submit" value="Add to Cart" /></a></p>
			
        </div>
        <?php
					}
		?>
   	</div>
</div> <!--main div end-->
</body>
</html>