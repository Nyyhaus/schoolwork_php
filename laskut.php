<form action="laskutoimituksia.php" method="get">
Ensimmäinen luku: <input type="text" name="ekaluku">
Toinen luku: <input type="text" name="tokaluku">
<input type="submit" value="Lähetä">
</form>

<?php
	$luku1 = $_GET["ekaluku"];
	$luku2 = $_GET["tokaluku"];
	if ($luku2 != 0) {
		echo "Kertolaskun tulos: ".$luku1 * $luku2."\n";
		echo "Jakolaskun tulos: ".$luku1 / $luku2;
	} else {
		echo "Kertolaskun tulos: ".$luku1 * $luku2."\n";
		echo "Jakolaskun tulos: nollalla ei saa jakaa";
	}
?>
