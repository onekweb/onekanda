<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once('include/head.php'); ?>
	<body>
	</head>
		<div id="wrapper">
				<header id="header">
					<?php include_once('include/header.php'); ?>
				</header>
				<div id="headerBg">
							Här ska det finnas en bakgrundsbild som täcker som header!
				</div>	
				<!-- end #header-->				
				<nav id="menu">
					<?php include_once('include/menu.php'); ?>
				</nav>
				<!-- end # menu-->				
				<section id="mainContent">	
						<h2>Blog</h2>
		
						<form action="include/confirm.php"  method="post">
							<p>Posta dina inlägg!</p>
							<table>
							<textarea rows="15" cols="50" style="resize: none" name="blogpost"></textarea>
							<tr>
								<td><input type="submit" name="sendpost" value="Posta"/></td>
							</tr>
							</table>
						</form>
						<?php include_once('include/viewblog.php');?>
					
				</section>
				<sidebar id="sidebarContent">
					<div class="sidebar">
							<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
								<table>
									<tr>
								<?php
								if(isset($_POST['login'])){ // if the user has pressed on login button, execute the code bellow
									$userName = $_POST['username'];
									$passWord = $_POST['password'];
									if ($userName && $passWord ) {
										$con = mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to myql
										$db = mysql_select_db("onekanda", $con) or die (mysql_error()); // connection to the database onekanda
										$query = mysql_query("SELECT * FROM user WHERE username='$userName'")or die(mysql_error()); // Select the tabell
										$numrows = mysql_num_rows($query);
										if ($numrows !=0) { // If the number of rows is equal than zero, execute the code bellow
											while ($row = mysql_fetch_assoc($query)) {
												$dbusername = $row['username'];
												$_SESSION['username'] = $userName; // The session variable for the username
												$dbpaswWord = $row['password'];
											}
											
											if ($userName == $dbusername && $passWord == $dbpaswWord) { // if the username and the password are correc, execute the code bellow
												echo "<h2 style='text-align:center;'><a href='include/logout.php'>Logga ut</a></h2>";
												echo "<p style='text-align:center; color:#333;'>Välkommen ".$_SESSION['username'];
											
												
											}else { 
												echo "Fel amvändarnamn eler lösenord";
									?>

									<?php									
											}
											
										}else {
											echo "Användare finns inte";
										}
									
								}
								
								}else {
									
									?>
										<h2>Inloggning</h2>
										<td>Namn<input type="text" name="username" />
											Lösenord<input type="password" name="password" size=""/></td>
									</tr>
									<tr>
										<td><input type="submit" name="login" value="Logga in"/></td>
									</tr>
									<tr>
										<td><p>Glöm ditt lösenord?</p></td>
									</tr>
								</table>
							</form>
								<?php
								}
								?>
						</div>
						<div class="sidebar">
						<h2>Blogg statistik</h2>
						
							<?php
							include_once ('include/connection.php');
							$numberofPost = 0;
							$result = mysql_query("SELECT * FROM content") or die (mysql_error()); // Query perfomance
							while ($row = mysql_fetch_array($result)){
								$numberofPost ++;
							}
							echo "<p style='text-align:center'>Antal inlägg just nu:<b style='color: #333'>$numberofPost</b></p>";
							
							?>
						
						</div>
				</sidebar>
				<!-- end # maincontainer -->			
				<br clear="both" />
				<footer id="footer">
					<?php include_once('include/footer.php'); ?>
				</footer>
				<!-- end #footer-->
		</div>
		<!--end #wrapper-->		
	<script src="js/script.js"></script>
	</body>
</html>
<?php
mysql_close($con);
?>