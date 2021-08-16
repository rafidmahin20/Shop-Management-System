<?php 

require "Controller/isLoggedIn.php";
require "Controller/DBconnect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>

	<link rel="stylesheet" href="view/dash.css">
</head>
<body>
	
<?php
include ("Model/header.php");
?>
<div style="background-color:red;">
<div style = "float :left;background-color:;">
		<table border="1" style=" border-collapse: collapse; margin-left: 450px; margin-top:10px;
    padding-left: 0px;float :left;">
                    <h1 style="font-family: 'Ubuntu', sans-serif;margin-left: 580px;">All Smartphopnes</h1>
			<tr>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Product Name</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Short Description</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Price</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Edit</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Delete</th>
			</tr>
			<?php 
				

		  		$con = connect();

		  		$results = mysqli_query( $con, "SELECT * FROM products"); 

		  		if(!$results){
		  			die(mysqli_error($connection));
		  		}

		  		while($row = mysqli_fetch_assoc($results)) :
		  	?>
			<tr>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['pname'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['sdesc'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['price'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><a style="text-decoration: none;"href="editproduct.php?id=<?php echo $row['id'] ?>">Edit</a></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><a style="text-decoration: none;"onClick="return confirm('Are you sure you want to delete')" href="Controller/deleteproduct.php?id=<?php echo $row['id'] ?>">Delete</a></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</div>




	<div style = "float :left;background-color:;">
		<table border="1" style=" border-collapse: collapse; margin-left: 80px; margin-top:10px;
    padding-left: 0px;float :left;">
                    <h1 style="font-family: 'Ubuntu', sans-serif;margin-left: 650px;">All Users</h1>
			<tr>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">First Name</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Last Name</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Username</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Password</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Gender</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Contact</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Email</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Address</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Edit</th>
				<th style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;">Delete</th>
				
			</tr>
			<?php 
				

		  		$con = connect();

		  		$results = mysqli_query( $con, "SELECT * FROM users"); 

		  		if(!$results){
		  			die(mysqli_error($connection));
		  		}

		  		while($row = mysqli_fetch_assoc($results)) :
		  	?>
			<tr>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['fname'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['lname'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['username'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['password'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['gender'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['mobile'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['email'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><?php echo $row['address'] ?></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><a style="text-decoration: none;"href="editUsers.php?id=<?php echo $row['id'] ?>">Edit</a></td>
				<td style="padding: 15px;text-align: left;font-family: 'Ubuntu', sans-serif;"><a style="text-decoration: none;"onClick="return confirm('Are you sure you want to delete')" href="Controller/deleteusers.php?id=<?php echo $row['id'] ?>">Delete</a></td>
			</tr>
			<?php endwhile; ?>
		</table>
	</div>
 </div>


</body>
</html>