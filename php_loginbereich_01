// Wie wird ein PHP Loginbereich erstellt?

<?php
	/* Vor Beenden der Session muss die Session wieder aufgenommen werden */
	session_start();

	/* Beenden der Session */
	session_destroy();
	$_SESSION= array();
?>

<!DOCTYPE html>
<html>
	<head><meta charset="utf-8"></head>
	<body>
		<h3>Login-Seite</h3>
		<form action="sc_schutz_b.php" method="post">
			<p><input name="n"> Name</p>
			<p><input type="password" name="p"> Passwort</p>
			
			<br><br><br><br>
			
			<p><input type="submit" value="Login"></p>
		</form>
		<a href="../index.html">Zurück zur Startseite</a>
		
	</body>
</html>
