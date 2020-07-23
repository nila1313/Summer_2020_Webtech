<?php

if(isset($_REQUEST['submit']))
{
	if (isset($_REQUEST['gender']))
    {
     $gender = $_REQUEST['gender'];
        if ($_REQUEST['gender'] == 'Male')
          {
            echo "Gender: Male";
          }
        elseif($_REQUEST['gender'] == 'Female')
            {
              echo "Gender: Female";
            }
         elseif($_REQUEST['gender'] == 'Other')
            {
              echo "Gender: Other";
            }
           }
        else
        {
         echo "Please Select you Gender";
        }
    }
	
?>

<head>
</head>
<body>

      <title></title>
      <form method="GET">
      	<fieldset>
      		<legend>Gender</legend>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        </fieldset>
        <br><input type="submit" name ="submit" value="Submit">
    </fieldset>
    </form>
 </body>
</html>