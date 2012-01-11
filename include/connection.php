<?php
$con = mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to myql
$db = mysql_select_db("onekanda", $con) or die (mysql_error()); // connection to the database onekanda
?>