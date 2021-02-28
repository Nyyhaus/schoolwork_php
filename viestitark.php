<form action="vieraskirja.php" method="get">
Lähettäjä: <input TYPE="text" name="nimi"><br>
Viesti: <input type="text" name="viesti"><br>
<input type="submit" value="Lähetä">     
</form>

<?php
	$nimi = trim($_GET["nimi"]);
	$nimi = strip_tags($nimi);
	$viesti = trim($_GET["viesti"]);
	$viesti = strip_tags($viesti);
	if ($nimi == "") {
		echo "Et antanut kaikkia tietoja!";
	} 
	else if ($viesti == "") {
		echo "Et antanut kaikkia tietoja!";	
	}
	else {
		echo $nimi.": ".$viesti;
	}
?>
