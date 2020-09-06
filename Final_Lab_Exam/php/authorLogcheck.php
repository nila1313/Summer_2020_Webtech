<?php
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/authorService.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../views/login.php?error=null_value');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);

			if($status=="admin"){
				$_SESSION['username'] = $username;
				header('location: ../views/adminhome.php');
			}
			elseif ($status=="author") {
				$_SESSION['username'] = $username;
				header('location: ../views/authorhome.php');
			

			}else{
				header('location: ../views/authorlogin.php?error=invalid_user');
			}
		}
	}



?>