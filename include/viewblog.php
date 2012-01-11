<?php
include_once ('connection.php');
$result = mysql_query("SELECT * FROM content ORDER BY id DESC") or die(mysql_error()); // Mysql query
while ($row = mysql_fetch_array($result)) {
	echo $row["post"]."<br />";
	echo "Datum:". date("d-m-Y H:i:s", strtotime($row[2]))."<br />";
	//echo "<b>Datum:</b>". date("l d m Y H:i:s", strtotime( $row["date"]));	

?>

<?php

echo "<hr /><br />";
}
?>


<?php
$con = mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to myql
$db = mysql_select_db("onekanda", $con) or die (mysql_error()); // connection to the database onekanda
$query = mysql_query("SELECT * FROM user WHERE username")or die(mysql_error()); // Select the tabell
$numrows = mysql_num_rows($query);
	if($numrows !=0){
		while ($row = mysql_fetch_assoc($query)) {
			$dbusername = $row['username'];
			$_SESSION['username'] = $userName; // The session variable for the username
			$dbpaswWord = $row['password'];
?>
	<form action="include/delete.php" method="post">
	<input type="submit" name="post" value="radera">
	<input type="hidden" name="delete" value="<?php echo $row[0];?>">
</form>
<?php
		}	
	}	
			
?>	

