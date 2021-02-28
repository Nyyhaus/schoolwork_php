<form action="tulostatiedot.php" method="get">
Valitse sukupuolesi: <input type="radio" value="mies" name="sukupuoli" checked>mies
<input type="radio" value="nainen" name="sukupuoli">nainen
<br>
Valitse ikäsi: 
<select name="ika">
<option value=1 selected>0-55</option>
<option value=2>Yli 55</option>
</select>
<br>
<input type="submit" value="Lähetä">     
</form>

<?php
	$spuoli = $_GET["sukupuoli"];
	$ika = $_GET["ika"];
	if ($spuoli == "mies")
		if ($ika <= 55)
			echo "Olet mies parhaassa iässä!";
		else
			echo "Olet viisas mies!";
	else if ($spuoli == "nainen")
		if ($ika >= 2)
			echo "Näytät nuorelta ikäiseksesi!";
		else
			echo "Olet neito kauneimmillaan!";
?>
		
