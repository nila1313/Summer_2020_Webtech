

<?php
if(isset($_POST['submit']))
{
	$conn = mysqli_connect('127.0.0.1', 'root', '','midproject');
	//mysqli_select_db($conn,'user');
	$query='select * from register where Name="'.$_POST['username'].'"';
	$result = mysqli_query($conn, $query);
	$data=mysqli_fetch_assoc($result);

	if (empty($data)) {
		# code...
		if ($_POST['password']==$_POST['confirmpassword']) {
			


	if(isset($_POST['submit'])){
	$nm = $_POST['name'];
	if($nm == "")
	 {
	 	echo "Please Enter Your Name ";
	 }

	 if(str_word_count($nm)<=2)
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
       $query="INSERT INTO register (Name,username,password,gender,email,phonecode,usertype) Values('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['usertype']."') ";
			
           

			mysqli_query($conn,$query);
		

			//echo "done";
			header("location: Login.php");
            

        }
  

		}
		else{
			echo"Password does not match";
		}

		
		mysqli_close($conn);
	}
	//header("location: login.html");
}


else {
       echo "Please Enter Your Name Correctly";
        }
}
 ?>
