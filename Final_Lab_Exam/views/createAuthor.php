<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Author</title>
</head>
<body>

	<form action="../php/authorController.php" method="post">
		<fieldset>
			<legend>Create New User</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="username"></td>
				</tr>
				
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="number" name="contactnumber"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="authorHome.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>