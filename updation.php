<?php

$size=sizeof($_POST);
$records=$size/4;
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($i=1; $i<=$records; $i++)
{
	$index_title="title".$i;
	$index_price="price".$i;
	$index_author="author".$i;
	
	$q = "update book
		SET
		
		title='$_POST[$index_title]',
		price=$_POST[$index_price],
		author='$_POST[$index_author]'
		where bookid=".$_POST["bookid".$i];
	mysqli_query($con,$q);

}

mysqli_close($con);

?>



<!Doctype html>
<html>

 <head>
 <link rel="stylesheet" href="css/home.css" >
  <title>Updation</title>
 </head>

 <body>
   <header>
	<h1>Book Record Management</h1>
   </header>
  
  <p>
   <?php 
    
		echo $records." Records updated";
	
   ?>
   <br/><a href="home.php">Home Page</a>
  </p>
  
 </body>
</html>