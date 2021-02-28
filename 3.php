<form action="tulostanimi.php" method="get">
Etunimi: <input type="text" name="enimi"><br>
Sukunimi: <input type="text" name="snimi">
<input type="submit" value="Lähetä">
</form>

<?php
	echo "Nimesi on ";
	echo $_GET["enimi"];
	echo $_GET["snimi"];
?>
