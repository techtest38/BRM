<!Doctype html>
<html>
 <head>
 <link rel="stylesheet" href="css/home.css" >
  <title>Insertion Form</title>
 </head>
 
 <body>
  <header>
	<h1>Book Record Management</h1>
   </header>
  <form action="insertion.php" method="post">
   <table>
	<tr>
	 <th>Title</th>
	 <td><input type="text" name="title" required /></td>
	</tr>
	<tr>
	 <th>Price</th>
	 <td><input type="text" name="price" required /></td>
	</tr>
	<tr>
	 <th>Author</th>
	 <td><input type="text" name="author" /></td>
	</tr>
	<tr>
	 <th></th>
	 <td><input type="submit" value="Insert" /></td>
	</tr>
   </table>
  </form>
  <br/><a href="home.php">Home Page</a>
 </body>
</html>