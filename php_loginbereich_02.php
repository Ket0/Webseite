// Nach dem erreichen der Landing Page wird der Gast 
// auf folgendes PHP Script geleitet, indem sein
// Name und das Passwort ueberprueft werden

<?php
	/* Session starten oder wieder aufnehmen */
	session_start();

	/* Falls Aufruf von Login Seite */
	if(isset($_POST["n"]))
	{
		/* Falls Name "n" und Passwort "p" korrekt */
		if( ($_POST["n"] == "Benutername_ID_01" && $_POST["p"] == "meinPassword_ID_01") || 
		    ($_POST["n"] == "Benutername_ID_02" && $_POST["p"] == "meinPassword_ID_02") )
		{
			$_SESSION["n"] = $_POST["n"];
		}
	}

	/* Kontrolle, ob innerhalb der Session */
	if(!isset($_SESSION["n"]))
		exit("<p>Sie haben keinen Account oder ein falsches Passwort eingegeben!<br> <a href=login_01.php>" . "Zurück zum Login</a></p>");
?>

<!DOCTYPE html>
<html>
<head><meta charset="utf-8"></head>

<body>
<h3>Intro-Seite</h3>
<?php
	/* Begrüßung des Benutzers */
	echo "<p>Hallo " . $_SESSION["n"] . "</p>";
?>
	
Willkommen in der PHP Welt.

<p><a href="/php/123.php">Bildergalerie</a></p>
<p><a href="/php/1234.php">Logout</a></p>

</body></html>
