<form action="lempiasiat.php" method="get">
Lempiväri: <input type="text" name="lempivari"><br>
Lempiruoka: <input type="text" name="lempiruoka">
<input type="submit" value="Lähetä">
</form>

<?php
	echo "Lempivärisi on ".$_GET["lempivari"]." ja lempiruokasi on ".
	$_GET["lempiruoka"];
?>
