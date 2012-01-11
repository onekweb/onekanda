<meta charset="UTF-8" />
<?php
include_once ('connection.php');
if(isset($_POST['post'])){
	$result = mysql_query("DELETE FROM content WHERE id");
	header('Location:../blog.php');
}	
?>