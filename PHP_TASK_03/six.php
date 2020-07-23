<?php
if(isset($_POST['submit']))
{
if (isset($_POST['bloodGroup'])) {
	$bg=$_POST['bloodGroup'];
	echo $bg;
}
else
{
	
	if(isset($_POST['submit']))
	{
		echo "Please Select your Blood Group ";
	}
}

}
?>


<html>
	
	<body>
		<form action = "#" method = "POST">
			<   
					<br><td>Blood Group</td></br>>
					<td >
						<select name="bloodGroup">
							
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
					</td>
					<td ></td>
					
				</tr>
				
				<br><input type="submit" name="submit" value="submit"></br>

				
    </body>
</html>