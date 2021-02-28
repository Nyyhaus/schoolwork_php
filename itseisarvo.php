<form action="itseisarvo.php" method="get">
Luku: <input type="text" name="luku">
<input type="submit" value="Lähetä">
</form>

<?php
	$luku = $_GET["luku"];
	if ($luku < 0)
		echo "Luvun ".$luku." itseisarvo on ".$luku*-1;
	else
		echo "Luvun ".$luku." itseisarvo on ".$luku;
?>
