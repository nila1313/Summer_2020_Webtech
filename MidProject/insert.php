

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
			# code...
			$query="INSERT INTO register (Name,username,password,gender,email,phonecode,usertype) Values('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['usertype']."') ";
			mysqli_query($conn,$query);
			echo "done";
			header("location: Login.php");

		}
		else{
			echo"Password does not match";
		}

		
		mysqli_close($conn);
	}
	//header("location: login.html");
}
else
{
	echo "invalid";
}



 ?>
