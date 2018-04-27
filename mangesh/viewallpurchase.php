<?php
include('database.php');
?>
<html>
<head>
	<title>All Purchase List</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
	
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenuadmin.php');?>
    <div class="side">
    	<h2>View All Purchase List</h2><hr/><hr/>
    	<table border="1">
        <th>Purchase ID</th>
        <th>Items id</th>
        <th>Customer Name</th>
        <th>Customer Address</th>
        <th>Customer Contact</th>
        <th>Date Of Purchase</th>
    	<?php 
            $conn = mysqli_connect("localhost","root","","mangesh_cp_db");
			$query = "SELECT * FROM `purchase_table`";
			$queryresult = mysqli_query($conn, $query);
			
			while ($data = mysqli_fetch_array($queryresult))
			{
				$purchase_id = $data['purchase_id'];
				$items_id = $data['items_id'];
				$customer_name = $data['customer_name'];
				$customer_address = $data['customer_address'];
				$customer_contact = $data['customer_contact'];
				$date_of_purchase = $data['date_of_purchase'];
		?>
        <tr><td><?php echo $purchase_id; ?></td> <td><?php echo $items_id; ?></td> <td><?php echo $customer_name; ?></td> <td><?php echo $customer_address; ?></td><td><?php echo $customer_contact; ?></td><td><?php echo $date_of_purchase; ?></td></tr>
        
        
		<?php		
			}
		?>
        </table>
   	</div>
   	
    
</div> <!--main div end-->
</body>
</html>