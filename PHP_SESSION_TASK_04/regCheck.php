<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if(empty($username) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($gender) || empty($day) || empty($month) || empty($year))
		{
			echo "null submission".'<a href="Home.html"><u>Home</a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "Match Password".'<a href="Home.html"><u>Home</a>';
			}
			else
			{
			
			setcookie('username', $username, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('confirmPassword', $confirmPassword, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			echo "Problem";

			header('location: login.html');
			}
		}

	}else{
		//header("location: login.html");
		echo "no value";
	}


?>