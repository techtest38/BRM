<?php

$size=sizeof($_POST);
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($i=1,$j=1; $i<=$size; $i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index])) //what can be used instead of $index
	{
		$q = "delete from book where bookid=".$_POST[$index];
		mysqli_query($con,$q);
	}
	else
		$i--;
}

mysqli_close($con);

?>

<!Doctype html>
<html>

 <head>
 <link rel="stylesheet" href="css/home.css" >
  <title>Deletion</title>
 </head>

 <body>
  <header>
	<h1>Book Record Management</h1>
   </header>
  
  <p>
   <?php 
    
		echo $size." Records Deleted";
	
   ?>
   <br/><a href="home.php">Home Page</a>
  </p>
 </body>
</html>