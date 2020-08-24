<?php
if(isset($_POST['submit'])){
	$nm = $_POST['username'];
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

 }
	
?>