<form action="merkkijonot.php" method="get">
Anna merkkijono: <input TYPE="text" NAME="merkkijono">
<br>
Valitse toiminto: 
<select name="mode">
<option value=1 selected>harvana pieninä</option>
<option value=2>harvana isoina</option>
<option value=3>takaperin pieninä</option>
<option value=4>takaperin isoina</option>
</select>
<br>
<input type="submit" value="Lähetä">     
</form>

<?php
	$merkkijono = $_GET["merkkijono"];
	$option = $_GET["mode"];
	if ($option == 1) {
		$mj = strtolower($merkkijono);
		echo implode(' ', str_split($mj, 1));
	}
	else if ($option == 2) {
		echo strtoupper($merkkijono);
	}
	else if ($option == 3) {
		$mj = strtolower($merkkijono);
		echo strrev($mj);
	}
	else if ($option == 4) {
		$mj = strtoupper($merkkijono);
		echo strrev($mj);
	}
?>
