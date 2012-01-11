<meta charset="UTF-8" />
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username && $password ) {
	include_once ('connection.php');
	$query = mysql_query("SELECT * FROM user WHERE username='$username'")or die(mysql_error());
	$numrows = mysql_num_rows($query);

	if ($numrows !=0) {
		while ($row = mysql_fetch_assoc($query)) {
			$dbusername = $row['username'];
			$_SESSION['username'] = $username;
			$dbpassword = $row['password'];
		}
		
		if ($username == $dbusername && $password == $dbpassword) {
			echo "Välkommen ".$_SESSION['username']." <a href='logout.php'>Logga ut</a>";
			
		}else {
			echo "Fel amvändarnamn eler lösenord";
		}
		
	}else {
		echo "Användare finns inte";
	}
	
}else {
	echo "Vänligen ange ditt användarnamn och lösenord";
}

?>