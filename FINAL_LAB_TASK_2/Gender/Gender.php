<?php

	if(isset($_GET['submit']) && !isset($_GET['gender']))
	{
		echo "You did not select your Gender";
	}
	if (isset($_POST['gender'])) 
	{
		
		echo $_POST['gender'];
		echo "     Thank you";
	}
?>