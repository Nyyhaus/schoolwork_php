<form action="luvut.php" method="get">
Luku: <input TYPE="text" name="luku"><br>
<input type="submit" value="Lähetä">     
</form>

<?php
	$luku = $_GET["luku"];
	if ($luku < 0)
		echo "Luvun pitää olla vähintään nolla!";
	else
		while ($luku >= 0) {
			echo $luku." ";
			$luku--;
		}
?>
