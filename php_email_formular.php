// PHP Formular 'Email'

<?php

//Daten für die Konfiguration
$mailto = 'mysite@gmail.com';
$mailForm = 'Form-Mailer PHP-Skript';
$mailSubject = 'Feedback vom PHP-Formular';
$returnPage = 'http://www.mysite.de/danke.html';
$returnError = 'http://www.mysite.de/fehler.html';
$mailContent = '';

//Formulardaten einlesen und Mail daraus erstellen
if(isset($_POST)) {
	foreach($_POST as $name => $value) {
		$mailContent .= $name . " : " . $value . "\n";
	}
}

//Email senden
$mailSent = mail ( $mailto, $mailSubject, $mailContent, 
				  "From: " . $mailForm );

//Check Email senden
if($mailSent == TRUE) {
	header("Location: " . $returnPage);
}
else {
	header("Location: " . $returnError);
}
exit();
?>
