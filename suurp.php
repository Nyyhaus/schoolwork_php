<?php
    $eka = $_GET['eka'];
    $toka = $_GET['toka'];
    $kolmas = $_GET['kolmas'];

	function suurin($eka, $toka, $kolmas) {
		if ($eka > $toka and $eka > $kolmas) {
			return $eka;
		}
		else if ($toka > $eka and $toka > $kolmas) {
			return $toka;
		}
		else {
			return $kolmas;
		}
	}
	function pienin($eka, $toka, $kolmas) {
		if ($eka < $toka and $eka < $kolmas) {
			return $eka;
		}
		else if ($toka < $eka and $toka < $kolmas) {
			return $toka;
		}
		else {
			return $kolmas;
		}
	}
	


    $suurin_luku = suurin($eka, $toka, $kolmas); 
    $pienin_luku = pienin($eka, $toka, $kolmas);

    echo "Syöttämistäsi luvuista suurin oli $suurin_luku"; 
    echo " ja pienin $pienin_luku";

?>
