<?php

   	function uusiarvo($merkkijono) {
		echo "Merkkijono aluksi: $merkkijono";
		return $merkkijono;
	}

    $merkkijono = "aluksi\n";
    uusiarvo($merkkijono);
    echo "Merkkijono lopuksi: $merkkijono\n";

?>
