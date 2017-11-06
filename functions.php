<?php

if(isset($_GET['calculate'])) {
	
	$broj1 = $_GET["broj1"];
	$broj2 = $_GET["broj2"];
	
	function proveri($broj) {
		if(!is_numeric($broj)) {
			echo "<h2>Morate uneti broj!</h2>";
			exit;
		}
	}
	
	function proveri_nulu($broj) {
		if($broj === "0") {
			echo "<h2>Nije moguće deljenje nulom!!!</h2>";
			exit;
		}
	}
	
	proveri($broj1);
	proveri($broj2);
	
	$sel = $_GET["operator"];
	
	switch($sel) {
		case "+":
			echo "<h2>Izvršili ste sabiranje brojeva {$broj1} i {$broj2}.</h2>";
			echo "<h2>Rezultat je: " . ($broj1 + $broj2) . "</h2>";
			break;
		case "-":
			echo "<h2>Izvršili ste oduzimanje brojeva {$broj2} od {$broj1}.</h2>";
			echo "<h2>Rezultat je: " . ($broj1 - $broj2) . "</h2>";
			break;
		case "*":
			echo "<h2>Izvršili ste množenje brojeva {$broj1} i {$broj2}.</h2>";
			echo "<h2>Rezultat je: " . ($broj1 * $broj2) . "</h2>";
			break;
		case "/":
			proveri_nulu($broj2);
			echo "<h2>Izvršili ste deljenje broja {$broj1} sa brojem {$broj2}.</h2>";
			echo "<h2>Rezultat je: " . ($broj1 / $broj2) . "</h2>"; 
			break;		
	}
}