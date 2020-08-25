<?php
#Name Validation
if(isset($_POST['submit'])){
  
  $nm = $_POST['username'];
  echo "done";

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