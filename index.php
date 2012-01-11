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
					<div id="columnRight">
					<?php include_once('include/content.php'); ?>	
					</div>
					<div id="columnLeft">
						<h2>CV</h2>
							<p>
								<h4>Utbildningar</h4>	
								<p><span style="color:#F98908; font-weight: bold; text-decoration: underline">Agile webd developper:</span> Det är en resultatorienterad utbildning inom modern webb- och systemutveckling med fokus på agila arbetsmetoder</p>
								<p><span style="color:#F98908; font-weight: bold; text-decoration: underline">Interaktionsdesign</span>: Interaktionsdesign med inriktning på webbdesign</p>
								<h4>Datakunskaper</h4>
								<p>* HTML 5</p>
								<p>* CSS</p>
								<p>* XML</p>
								<p>* Javascript</p>
								<p>* PHP</p>	
								<p>Läs mer <a href="#" style="color: #F98908">här...</a></p>
							<p>
					</div>
				</section>
				<!-- end # maincontainer -->			
				<sidebar id="sidebarContent">
					<?php include_once('include/sidebar.php'); ?>
				</sidebar>
				<br clear="both" />
				<!-- end #aside -->
				<footer id="footer">
					<?php include_once('include/footer.php'); ?>
				</footer>
				<!-- end #footer-->
		</div>
		<!--end #wrapper-->		
	<script src="js/script.js"></script>
	</body>
</html>