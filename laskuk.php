<form action="laskukone.php" method="get">
<input TYPE="text" name="ekaluku">
<select name="operator">
<option value=1 selected>+</option>
<option value=2>-</option>
<option value=3>*</option>
<option value=4>/</option>
</select>
<input TYPE="text" name="tokaluku">
<input type="submit" value="Lähetä">     
</form>

<?php
	$ekaluku = $_GET["ekaluku"];
	$tokaluku = $_GET["tokaluku"];
	$option = $_GET["operator"];

	if (empty($ekaluku) or empty($tokaluku)) {
		echo "Et antanut molempia lukuja!";
	}
	else if ($option == 1) {
		$tulos = $ekaluku + $tokaluku;
		echo "$ekaluku + $tokaluku = $tulos";
	}
	else if ($option == 2) {
		$tulos = $ekaluku - $tokaluku;
		echo "$ekaluku - $tokaluku = $tulos";
	}
	else if ($option == 3) {
		$tulos = $ekaluku * $tokaluku;
		echo "$ekaluku * $tokaluku = $tulos";
	}
	else if ($option == 4) {
		$tulos = $ekaluku / $tokaluku;
		echo "$ekaluku / $tokaluku = $tulos";
	}
?>
