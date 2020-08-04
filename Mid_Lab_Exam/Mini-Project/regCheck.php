<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if(empty($username) || empty($password) || empty($email) || empty($name) || empty($confirmPassword))
		{
			echo "null submission".'<a href="registration.html"><u>Registration</a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "Match Password".'<a href="registration.html"><u>Registration</a>';
			}
			else
			{
			
			setcookie('username', $username, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('confirmPassword', $confirmPassword, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			
			echo "Problem";

			header('location: Login.html');
			}
		}

	}else{
		
		echo "no value";
	}


?>