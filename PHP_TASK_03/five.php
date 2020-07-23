<?php

if (isset($_GET['SSC']) || isset($_GET['HSC']) || isset($_GET['BSc'])) 
{
	$S=$_GET['SSC'];

	$H=$_GET['HSC'];

	$B=$_GET['BSc'];
	
	
}
else
{
	if (isset($_GET['submit'])) {
		
		echo "Selected";
	}
	else 
    {
		echo "The person does not have a degree";
	}
}
?>

<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="SSC" value="SSC"> SSC
			<input type="checkbox" name="HSC" value="HSC"> HSC
			<input type="checkbox" name="BSc" value="BSc"> BSc<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>