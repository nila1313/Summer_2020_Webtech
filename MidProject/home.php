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
							<option value="">Geography</option>
					</td>
					<td ><a href="blog.php">Blog</a></td>
					<td ><a href="notification.php">Notification</a></td>
					
				</tr>
				<tr height="35px">
					<td width = "130px">Name</td>
					<td width = "320px">
						<input type="text" name="" value="">
					</td>
					<td width = "40px"></td>
					
				</tr>
				<tr height="35px">
					<td >Email</td>
					<td >
						<input type="email" name="" value="">
					</td>
					<td ></td>
					
				</tr>
				<tr height="35px">
					<td>Gender</td>
					<td >
						<input type="radio" name="gender" value="">Male
						<input type="radio" name="gender" value="">Female
						<input type="radio" name="gender" value="">Other
					</td>
					<td ></td>
					
				</tr>
				<tr height="35px">
					<td>Date Of Birth</td>
					<td >
						<input type="text" size="1%">/
						<input type="text" size="1%">/
						<input type="text" size="1%"> (dd/mm/yyyy)
					</td>
					<td ></td>
					
				</tr>
				
				<tr height="35px">
					<td>Degree</></td>
					<td >
						<input type="checkbox" name="" value="">SSC
						<input type="checkbox" name="" value="">HSC
						<input type="checkbox" name="" value="">BSc.
						<input type="checkbox" name="" value="">MSc.
					</td>
					<td ></td>
					
				</tr>
				
				
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
