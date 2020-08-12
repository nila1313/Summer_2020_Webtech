<?php
 
 session_start();
 if($_COOKIE['ustatus']=="OK")
 {
    setcookie('ustatus', "OK", time()-36000, '/');
    header("location:Login.php");
 }
 
 else
 {
    header("location:Login.php");
 }

?>