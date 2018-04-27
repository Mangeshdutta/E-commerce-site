<?php
    include('database.php');
?>
<html>
<head>
    <title>Contact Details</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
    
    <?php include('header.php');?>
    <?php include('banner.php');?>
    <?php include('sidemenuadmin.php');?>
    <div class="side">
        <h2>Contact Details</h2><hr/>
        <p>These are the message send by the customer</p>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Message</th>
                </tr>

                <?php 
                    $conn = mysqli_connect("localhost","root","","mangesh_cp_db");
                    $query = "SELECT * FROM `contact_table`";
                    $queryresult = mysqli_query($conn, $query);
                    while($data = mysqli_fetch_array($queryresult))
                        {
                            $name =$data['name'];
                            $email = $data['email'];
                            $contact = $data['contact'];
                            $address = $data['address'];
                            $message = $data['message'];
                        
                ?>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $contact;?></td>
                    <td><?php echo $address;?></td>
                    <td><?php echo $message;?></td>
                </tr>

                <?php
                        }
                ?>
            </table>
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