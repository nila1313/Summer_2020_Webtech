<?php 
$date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
if(isset($_POST['submit']))
{
	
    if(empty($date)||empty($month)||empty($year))
    {
      echo "Please try again!";
    }

elseif(($date>=1 && $date<=31) && ($month >=1 && $month<=12) && ($year >=1900 && $year <=2016))
{
    echo "Thank You!";
}
else {
    echo "Please try again!";
}
}
?>

<html>
	
	<body>
		
			<form action = "#" method = "POST">
					<fieldset>
						
      		           <legend>Date Of Birth</legend>
						<h2> dd / mm / yyyy </h2>
						
						<input type="text" name="date" size="1%" value="">/
						<input type="text" name="month" size="1%" value="">/
						<input type="text" name="year" size="1%" value=""> 
					
				
					<br><input type="submit" name="submit" value="submit"></br>
					</fieldset>
			
			
            </form>

    </body>
</html>
