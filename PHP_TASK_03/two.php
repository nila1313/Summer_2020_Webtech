<?php

   $email=$_GET['email'];
   $condition = False;
   $positionAt =strpos($email, '@');
   $positionDotCom = strpos($email, ".com");


  if($email=="")
  {
    echo "Please Enter Your Email Address ";
  }
  elseif( $positionAt==True && $positionDotCom==True)
    echo "Thank you :",$email;

  else
  {
    echo "Try again: ",$email;
  }

?>
<html>
<head>
  <title></title>
</head>
<body>
  <form>
    Email <br>
    <input type="email" name="email" placeholder="sample@example.com"><br>
    <input type="submit" name="submit">
  </form>
</body>
</html>