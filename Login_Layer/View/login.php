<?php

if(isset($_GET['error'])){

	if($_GET['error']=='null_value'){
		echo"Username/Password field cant left empty";
	}

	
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
      <form action="../php/logCheck">
      	<fieldset>
      		<legend>
      			SignIn
      		</legend>
      		<table>
      			<tr>
      				<td>Username<td>
                    <td><input type="text" name="username">
      			</tr>
      			<tr>
      				<td>Password<td>
                    <td><input type="text" name="password">
      			</tr>
      			<tr>
      				<td>Email<td>
                    <td><input type="text" name="email">
      			</tr>
      			<tr>
      				<td></td>
                    <td><input type="submit" name="submit">
      			</tr>


      		</table>>
      	</fieldset>>
      </form>
</body>
</html>