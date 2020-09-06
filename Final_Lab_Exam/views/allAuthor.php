<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="authorHome.php">Back</a> |
	<a href="../php/authorlogout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>AuthorName</td>
			<td>Username</td>
			<td>Password</td>
			<td>ContactNumber</td>

		</tr>

		<?php  
			$users = getAllUser();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['authorname']?></td>
			<td><?=$users[$i]['username']?></td>
			<td><?=$users[$i]['password']?></td>
			<td><?=$users[$i]['contactnumber']?></td>
			
			<td>
				<a href="authorEdit.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="authorDelete.php?id=<?=$users[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>