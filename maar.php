<?php

    $lkm = 3;
	$elain = "kissa";
	$a = array(9, 7, 5);
	$teksti = "Lainausmerkkien(\" ja \") sisällä voi käyttää kenoviivalla(\\) merkittyjä erikoiskoodeja.";
	

    $tulostus = implode(",",$a);
    echo $teksti;
    echo "Ostin $lkm {$elain}a.\n";
    echo "Taulukon sisältö: $tulostus";
?>
