<?php
$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!Doctype html>
<html>
	<head>
	<link rel="stylesheet" href="css/view.css" >
		<title>View Book Records</title>
	</head>
	
	<body>
		<header>
	<h1>Book Record Management</h1>
   </header>
		<form action="deletion.php" method="post">
			<table border="">
				<tr>
					<th>Book ID</th>
					<th>Title</th>
					<th>Price</th>
					<th>Author</th>
					<th>Select to Delete</th>
				</tr>
				<?php
				for($i=1; $i<=$num; $i++)
				{
					$row=mysqli_fetch_array($result);
				?>	
					<tr>
						<td><?php echo $row['BookId']; //why "bookid" doesnt work ?></td>
						<td><?php echo $row['Title']; ?></td>
						<td><?php echo $row['Price']; ?></td>
						<td><?php echo $row['Author']; ?></td>
						<td><input type="checkbox" value="<?php echo $row['BookId']; ?>" name="b<?php echo $i; ?>" /></td>
					</tr>
					
				<?php
				}
				?>
				<tr>
				<td colspan="5"><input type="submit" value="Delete"/></td>
				</tr>
			</table
		</form>	
		<br/><a href="home.php">Home Page</a>
	</body>
</html>