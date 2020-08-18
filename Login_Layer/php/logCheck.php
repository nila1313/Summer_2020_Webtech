<?php 

if(isset($_POST['submit'])){

     $username=$$_POST['username'];
     $password=$$_POST['password'];

     if(empty($user))||empty($password){
     	header('location:../view/login.php?error=null_value');

     }
     else{
     	$conn=mysql_connect('127.0.0.1','root','','webtect');
     	if(!$conn)
     	{
     		echo"DB connection error";
     	}
     	$sql="select * from users where username='{$username}' and password='{$password}'";
     	$result=
     }

}




?>
