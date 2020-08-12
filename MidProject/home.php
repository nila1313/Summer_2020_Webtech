<?php
  
  if(isset($_COOKIE['status'])||isset($_COOKIE['ustatus']))
  {

?>  	
	<!DOCTYPE html>
<html>
	<head>
		
	
	</head>
	<body>
		<fieldset>
			<form action = "#" method = "POST">
			<tr height="70px">
					<td align="center">
					<center>
						<h3><b>MNP Academy</b></h3><br>	
							<hr>
															
					</center>
					</td>
					
				</tr>
			
			<table >
				<tr height="35px">
				<td colspan = "10" align="right">
			<a href="Logout.php">Log out</a>
		     </td>
				</tr>
				<tr height="70px">
					<td colspan="3" align="center">
						<h3><b>HOME PAGE</b></h3>
						<hr>
					</td>
					
				</tr>
				<tr height="35px">
					<td>Courses</td>
					<td >
						<select name="">
							
							<option value="">Math</option>
							<option value="">Physics</option>
							<option value="">Chemistry</option>
							<option value="">Biology</option>
							<option value="">Computer Science</option>
							<option value="">Economics</option>
							<option value="">Commerce</option>
							<option value="">Geography</option><br>
							

					</td>
					

					<td ><a href="blog.php">Blog</a></td>
					<td ><a href="notification.php">Notification</a></td>
					
					
				</tr>
				<tr height="35px">
					<td width = "130px"><a href="math.php">Confirm</a></td>
					
				</tr>
				<tr height="35px">
					<td>Competition</td>
					<td >
						<select name="">
							
							<option value="">Math Contest</option>
							<option value="">Physics Contest</option>
							<option value="">Chemistry Contest</option>
					</td>
					
				<td width = "130px"><a href="payment.php">Payment</a></td>
				
								
				</tr>
				
			</table>
            </form>
			
		</fieldset>		
    </body>
</html>

<?php
  }
  else
  {

     header("location:Login.php");

  }

?>
