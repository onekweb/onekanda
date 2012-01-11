<meta charset="UTF-8"
<?php
include_once ('connection.php');
$myPost = $_POST['blogpost'];
$query = mysql_query("INSERT INTO content (post)VALUES('$myPost')") or die(mysql_error()); // Mysql query
if(isset($_POST['sendpost'])){
	header('Location:../blog.php');
}
echo "Tack";
?>