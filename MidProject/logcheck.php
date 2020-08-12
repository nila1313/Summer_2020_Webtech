  <?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
        $valid=FALSE;
		if(empty($username) || empty($password)){
			$valid=FALSE;
			echo "null submission";

		}else{
			
			$conn =mysqli_connect('localhost', 'root', '', 'midproject');
			//$sql = "select * from users where username='".$uname."' and password='".$password."'";
			$sql = "select * from register where username='{$username}' and password='{$password}'";

			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			echo $_POST['checkRemember'];
			if(!empty($user)){

				$_SESSION['username']=$username;

				if(isset($_POST['checkRemember']))
				{
					setcookie('username',$user['username'],time()+3655522866465,'/');
					setcookie('password',$user['password'],time()+3655522866465,'/');

					setcookie('remember',$_POST['checkRemember'], time()+365552286,'/');
					setcookie('status','OK',time()+36555228,'/');
				}	

				else if(!isset($_POST['checkRemember']))
				{

					setcookie('remember',$_POST['checkRemember'], time()-36555228,'/');
					setcookie('username',$user['username'],time()+3650,'/');
					setcookie('password',$user['password'],time()+3650,'/');
					setcookie('status','OK',time()-3655,'/');
					setcookie('ustatus','OK',time()+31000,'/');

				}
              mysqli_close($conn);
				$valid=TRUE;
			}

			if($valid==TRUE)
			{
				header("location:home.php");
			}

			else{
				header("location:Login.php");
			}
		}

	}else{
		header("location: Login.php");
	}

?>