<ul>
	<li>
		<?php
		if($_SERVER['PHP_SELF'] == "/onekanda/index.php") {
			echo "<a href=\"index.php\" class=\"active\">Hem</a>";
		} else {
			echo "<a href=\"index.php\">Hem</a>";
		}
		?>
	</li>
	<li>
		<?php
		if($_SERVER['PHP_SELF'] == "/onekanda/ommig.php") {
			echo "<a href=\"ommig.php\" class=\"active\">Om mig</a>";
		} else {
			echo "<a href=\"ommig.php\">Om mig</a>";
		}
		?>
		
	<li>
		<?php
		if ($_SERVER['PHP_SELF'] == "/onekanda/portfolio.php") {
			echo "<a href=\"ommig.php\" class=\"active\">Portfolio</a>";
			}else {
				echo "<a href=\"portfolio.php\">Portfolio</a>";
			}
		?>
		
	</li>
		<li>
		<?php
		if ($_SERVER['PHP_SELF'] == "/onekanda/demo.php") {
			echo "<a href=\"demo.php\" class=\"active\">Demo</a>";
			}else {
				echo "<a href=\"demo.php\">Demo</a>";
			}
		?>
		
	</li>
	</li>
		<li>
		<?php
		if ($_SERVER['PHP_SELF'] == "/onekanda/kontakt.php") {
			echo "<a href=\"kontakt.php\" class=\"active\">Kontakt</a>";
			}else {
				echo "<a href=\"kontakt.php\">kontakt</a>";
			}
		?>
		
	</li>


</ul>