<?php

if(isset($_POST['submit']))
{
	if (isset($_POST['SSC'])) 
	{
		echo $_POST['SSC']."<br>";
	}
	if (isset($_POST['HSC'])) 
	{
		echo $_POST['HSC']."<br>";
	}
	if (isset($_POST['BSc'])) 
	{
		echo $_POST['BSc']."<br>";
	}
	
}

?>