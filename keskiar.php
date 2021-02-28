<?php

    $lukujono = $_GET['lukujono'];
    $lukutaulukko = explode(',',$lukujono);

    	$pisteet = implode(" ", $lukutaulukko);
	$summa = 0;
	for ($i = 0; $i < count($lukutaulukko); $i++) {
				$summa += $lukutaulukko[$i];
	}
	$keskiarvo = $summa / count($lukutaulukko);  

    echo "Pisteet olivat: $pisteet\n";
    echo "Pisteiden summa: $summa\n";
    echo "Pisteiden keskiarvo: $keskiarvo";
?>
