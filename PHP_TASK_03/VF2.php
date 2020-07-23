<?php
if(isset($_POST['submit'])){
	$nm = $_POST['nm'];
	if($nm == "")
	 {
	 	echo "Please Enter Your Name ";
	 }

	 if(strlen($nm)<=2)
	 {
	 	echo "Your Name should contain at least 2 words ";
	 }
	 $length=strlen($nm);
	 $condition=FALSE;
	

	if($nm[0]>='a' && $nm[0]<='z' || $nm[0]>='A'&& $nm[0]<='Z')
       {
         for($i = 1; $i<$length; $i++)
            {
             if($nm>='a'&& $nm<='z' || $nm>='A'&& $nm<='Z' || $nm=='.' || $nm=='-' )
             {
                  $condition = TRUE;
             }

             else {
                 $condition = FALSE;
             }
            }  
        }
      else {
      $condition =FALSE;
      }
    if( $condition == TRUE)
   {
       echo "Next";
   }
   else {
       echo "Please Enter Your Name Correctly";
   }
   
	


}
	
?>
<html>
	<head>
		
	
	</head>>
	<body>
		<center>
			<form action = "#" method = "POST">
			<table width="28%" border="1">
				<tr height="70px">
					<td colspan="3" align="center">
						<h3><b>PERSON PROFILE</b></h3>
					</td>
					
				</tr>
				<tr height="35px">
					<td width = "130px">Name</td>
					<td width = "320px">
						<input type="text" name="nm" value="">
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
					<td>Blood Group</td>
					<td >
						<select name="">
							
							<option value="">A+</option>
							<option value="">A-</option>
							<option value="">B+</option>
							<option value="">B-</option>
							<option value="">AB+</option>
							<option value="">AB-</option>
							<option value="">O+</option>
							<option value="">0-</option>
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
				<tr height="35px">
					<td>Photo</td>
					<td colspan="2">
						<input type="button" name="" value="Browse..."> No file selected.
					</td>
					
				</tr>
				<tr height="35px">
					<td colspan = "3" align="center">
					</td>
					
				</tr>
				<tr height="35px">
					<td colspan = "3" align="Right">
						<input type="submit" name="submit" value="submit">
						<input type="button" name="" value="Reset">
					</td>
				</tr>
			</table>
            </form>
			</center>
				
    </body>
</html>
