<?php
#Name Validation
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
       echo "Successful!!!!";
        }
   else {
       echo "Please Enter Your Name Correctly";
        }

 

#Email Validation
 $email=$_POST['email'];
   $condition = False;
   $positionAt =strpos($email, '@');
   $positionDotCom = strpos($email, ".com");


  if($email=="")
  {
    echo "Please Enter Your Email Address ";
  }
  elseif( $positionAt==True && $positionDotCom==True)
    echo "Thank you :",$email;

  else
  {
    echo "Try again: ",$email;
  }

#Gender Validation
if (isset($_REQUEST['gender']))
    {
     $gender = $_REQUEST['gender'];
        if ($_REQUEST['gender'] == 'Male')
          {
            echo "Gender: Male";
          }
        elseif($_REQUEST['gender'] == 'Female')
            {
              echo "Gender: Female";
            }
         elseif($_REQUEST['gender'] == 'Other')
            {
              echo "Gender: Other";
            }
           }
        else
        {
         echo "Please Select you Gender";
        }
#Date Of Birth Validation
    $date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
if(isset($_POST['submit']))
{
	
    if(empty($date)||empty($month)||empty($year))
    {
      echo "Please try again!";
    }

elseif(($date>=1 && $date<=31) && ($month >=1 && $month<=12) && ($year >=1900 && $year <=2016))
     {
    echo "Thank You for yor DOB!";
     }
else {
    echo "Please try again!";
     }
 }
#Degree Validation
if (isset($_POST['SSC']) || isset($_POST['HSC']) || isset($_POST['BSc'])) 
{
	$S=$_POST['SSC'];

	$H=$_POST['HSC'];

	$B=$_POST['BSc'];
	
	
}
else
{
	if (isset($_POST['submit'])) {
		
		echo "Selected";
	}
	else 
    {
		echo "The person does not have a degree";
	}
}

# Blood Group Validation
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


#File Upload Validation
$condition=true;
if(isset($_GET['text']))
{
	$Picture=(int)($_GET['text']);
	if ($Picture<=0) {
	
		$condition=false;
	}
}
}
if (isset($_GET['file'])) {
	
	$Picture=$_GET['file'];
	if ($Picture=="") {
		
		$condition=false;
	}
}
if ($condition==false)
 {
	
	echo "This is not correct";
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
						<input type="email" name="email" value=""example@any.com"><br>
				
					</td>
					<td ></td>
					
				</tr>
				<tr height="35px">
					<td>Gender</td>
					<td >
						 <input type="radio" name="gender" value="Male">Male
                         <input type="radio" name="gender" value="Female">Female
                         <input type="radio" name="gender" value="Other">Othe
					</td>
					<td ></td>
					
				</tr>
				<tr height="35px">
					<td>Date Of Birth</td>
					<td> <input type="text" name="date" size="1%" value="">/
						<input type="text" name="month" size="1%" value="">/
						<input type="text" name="year" size="1%" value=""> 
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
						<input type="checkbox" name="SSC" value="SSC"> SSC
			           <input type="checkbox" name="HSC" value="HSC"> HSC
			            <input type="checkbox" name="BSc" value="BSc"> BSc
			
					</td>
					<td ></td>
					
				</tr>
				<tr height="35px">
					<td>Photo</td>
					<td colspan="2">
						<input type="file" name="file" value="Browse..."> 
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
