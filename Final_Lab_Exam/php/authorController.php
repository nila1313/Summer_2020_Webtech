<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add author
	if(isset($_POST['create'])){
		$authorname 	    = $_POST['author_name'];
		$username 	        = $_POST['username'];
		$password 	        = $_POST['password'];
		$contactNumber 		= $_POST['contact_number'];
		
		

		if(empty($username) || empty($password) || empty($contactNumber ) || empty($profileDescription)|| empty( $industry ) || empty($companywebsite) || empty($companyLogo )) || empty($userAccountId){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'author_name'=> $username,
				'username'=> $authorname ,
				'password'=> $password,
				'contact_number'=> $contactNumber,
				
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}
?>