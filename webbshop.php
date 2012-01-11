<?php
session_start("varukorg");
?>
<html>
	<head>
		<title>Handla</title>
	</head>
	<body>
		<?php
		if (isset($_POST['ok'])) {
			Laggtill();
		}
		if (isset($_POST['tabort'])) {
			Laggtill();
		}
		if (isset($_GET['action'])||isset($_POST['action'])) {
			if ($_GET['action']=='loggain') {
				LoggaIn();
			if ($_POST['action']=='Skicka') {
				Matain();
			}
			
			}
		}else {
			visaProdukter();
			visaInnehall();
		}
		?>
	</body>
</html>
<?php
function VisaProdukter(){
	$länl = mysql_connect("localhost", "root","")or die(mysql_error());
	$db = mysql_select_db("webbshop")or die(mysql_error());
	$sql = "SELECT * FROM prods";
	$result = mysql_query("produkter", $sql)or die(mysql_error());
	echo "<table>";
	echo "<tr><th>Artikel</th><th>Antal</th<th></th></tr>";
	while ($rad = mysql_fetch_array($result)) {
		echo "<form method='post action='include/fil1.php'>"; 
		echo "<tr><td>";
		echo $rad["desk"];
		echo "<input type'hidden' name='besk' value='".$rad["besk"]."'>";
		echo "</td><td><input type'hidden' value='".$rad["pid"]."' name='id'>";
		echo "<input type='submit' value='Lägg till' name='ok'></td></tr></form>";
	}
	mysql_close($länl);
	echo "</tabl>";
}
?>