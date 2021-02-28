<form action="merkkijono.php" method="get">
Ensimmäinen merkkijono: <input TYPE="text" name="merkkijono1"><br>
Toinen merkkijono: <input TYPE="text" name="merkkijono2"><br>
<input type="submit" value="Lähetä">     
</form>

<?php
	$merkkijono1 = trim($_GET["merkkijono1"]);
	$merkkijono2 = trim($_GET["merkkijono2"]);
	$pituus = strlen($merkkijono1) + strlen($merkkijono2);
	if ($merkkijono1 == "" or $merkkijono2 == "") {
		echo "Et antanut molempia merkkijonoja!";
	}
	else {
		echo "Antamasi merkkijonot olivat \"$merkkijono1\" ja \"$merkkijono2\". Niiden pituus yhteensä on $pituus merkkiä!";
	}
?>
