<?php
  
  if(isset($_COOKIE['status'])||isset($_COOKIE['ustatus']))
  {

?>  	
	<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
<form action="" method="POST">
	<table>
		<tr>
			
			<td>
				User Name:
			</td>
			<td>
				<input type="text" placeholder=" User Name" name="username"
				>
			</td>
           <td>
			<a href="Logout.php">Log out</a>
		</td>
	</table>

</form>
</body>
</html>

<?php
  }
  else
  {

     header("location:Login.php");

  }

?>
