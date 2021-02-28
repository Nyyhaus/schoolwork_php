<form action="palkanlaskenta.php" method="get">
Tehtyjen työtuntien määrä: <input type="text" name="tunnit">
Tuntipalkka: <input type="text" name="tuntipalkka">
Veroprosentti: <input type="text" name="veroprosentti">
<input type="submit" value="Lähetä">
</form>

<?php
	$tunnit = trim($_GET["tunnit"]);
	$tuntip = trim($_GET["tuntipalkka"]);
	$verop = trim($_GET["veroprosentti"]);

	if ($tunnit  == "" or $tuntip == "" or $verop == "") {
		echo "Et antanut kaikkia tietoja!";
	}
	else {
		$brutto = ($tunnit*$tuntip*$verop / 100);
		$netto = ($tuntip*$tunnit);
		$jee = ($netto - $brutto);
		echo "Palkka ilman veroja: ".$netto."\n";
		echo "Veron osuus palkasta: ".$brutto."\n";
		echo "Palkka verojen jälkeen: ".$jee;
	}
?>
