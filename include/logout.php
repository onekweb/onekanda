<?php
session_start();
$loggaut = "<a href='login.php'>Loggain</a>";

if($loggaut){
	session_destroy();
	header("Location:../blog.php");
}

?>