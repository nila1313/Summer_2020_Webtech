<?php
    require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		if($user = delete($_GET['id']))
		{
			header('location:all_users.php');
		}
			
	}else{
		header('location:all_users.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Delete user</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="delete" value="Delete"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
