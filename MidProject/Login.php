
<?php 
session_start();
if(isset($_COOKIE['remember']))
{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
<form action="logcheck.php" method="POST">
	<table>
		<tr>
			
			<td>
				User Name:
			</td>
			<td>
				<input type="text" placeholder=" User Name" name="username" value="<?php echo $_COOKIE['username'];?>">
			</td>
		</tr>
		<tr>
			
			<td>
				Password:
			</td>
			<td>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_COOKIE['password'];?>">
			</td>


		</tr>
        <tr>
        	<td>
        		<input  type="checkbox" name="checkRemember" autocomplete="on" checked><i>Remember Me</i>
        	</td>
        </tr>
			
			 
			
		<tr>
			<td>
			<input type="Submit" value="Submit" name="submit">
			<input type="Reset" value="Reset" name="">
			<a href="register.html"><u>Register</u></a>
		</td>
		</tr>


	</table>

</form>
</body>
</html>
 <?php
    }

 else
{
?>
	<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
<form action="logcheck.php" method="POST">
	<table>
		<tr>
			
			<td>
				User Name:
			</td>
			<td>
				<input type="text" placeholder=" User Name" name="username" >
			</td>
		</tr>
		<tr>
			
			<td>
				Password:
			</td>
			<td>
				<input type="password" placeholder="Password" name="password"
				>
			</td>


		</tr>
        <tr>
        	<td>
        		<input  type="checkbox" name="checkRemember"><i>Remember Me</i>
        	</td>
        </tr>
			
			 
			
		<tr>
			<td>
			<input type="Submit" value="Submit" name="submit">
			<input type="Reset" value="Reset" name="">
			<a href="register.html"><u>Register</u></a>
		</td>
		</tr>


	</table>

</form>
</body>
</html>

<?php
}
	

?>
