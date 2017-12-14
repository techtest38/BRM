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
		<title>Update Book Records</title>
	</head>
	
	<body>
		<header>
	<h1>Book Record Management</h1>
   </header>
		<form action="updation.php" method="post">
		<table border="" border-color="blue">
			<tr>
				<th>Book ID</th>
				<th>Title</th>
				<th>Price</th>
				<th>Author</th>
			</tr>
			<?php
			for($i=1; $i<=$num; $i++)
			{
				$row=mysqli_fetch_array($result);
			?>	
				<tr>
					<td><?php echo $row['BookId'];?>
					<input type="hidden" value="<?php echo $row['BookId']; ?>" name="bookid<?php echo $i; ?>" /></td>
					<td><input type="text" value="<?php echo $row['Title']; ?>" name="title<?php echo $i; ?>" /></td>
					<td><input type="text" value="<?php echo $row['Price']; ?>" name="price<?php echo $i; ?>" /></td>
					<td><input type="text" value="<?php echo $row['Author']; ?>" name="author<?php echo $i; ?>" /></td>
				</tr>
				
			<?php
			}
			?>
		</table>
		<input type="submit" value="Update" />
		</form>
		<br/><a href="home.php">Home Page</a>
	</body>
</html>