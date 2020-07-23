<?php

if(isset($_POST['submit'])){
$condition=true;
if(isset($_GET['text']))
{
	$Picture=(int)($_GET['text']);
	if ($Picture<=0) {
	
		$condition=false;
	}
}
}
if (isset($_GET['file'])) {
	
	$Picture=$_GET['file'];
	if ($Picture=="") {
		
		$condition=false;
	}
}
if ($condition==false)
 {
	
	echo "This is not correct";
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Profile Picture</legend>
			User Id<input type="text" name="text"><br>
			<br>
			Picture<input type="file" name="file"><br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>