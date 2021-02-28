<form action="parillisuus.php" method="get">
Luku: <input TYPE="text" name="luku"><br>
<input type="submit" value="Lähetä">     
</form>

<?php
	$luku = $_GET["luku"];
	if ($luku % 2 == 0) {
		echo "Luku $luku on parillinen.";
	}
	else if ($luku < 0 or $luku == 0) {
		echo "Antamasi syöte ei ollut kelvollinen!";
	}
	else {
		echo "Luku $luku on pariton.";
	}
?>
