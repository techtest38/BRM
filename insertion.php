<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="insert into book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!Doctype html>
<html>

 <head>
 <link rel="stylesheet" href="css/home.css" >
  <title>Insertion</title>
 </head>

 <body>
  <header>
	<h1>Book Record Management</h1>
   </header>
  
  <p>
   <?php 
    if($status==1)
		echo "Record Inserted";
	else
		echo "Insertion Failed";
   ?>
   <br/><a href="home.php">Home Page</a>
  </p>
 </body>
</html>
