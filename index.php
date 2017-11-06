<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kalkulator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Kalkulator</h1>
		<form action="" method="GET" name="kalkulator">
			<label for="broj1"><strong>Unesite prvi broj:</strong></label>
			<input type="text" name="broj1" id="broj1"><br>
			<label for="operacija"><strong>Izaberite operaciju:</strong></label>
			<select name="operator" id="operacija">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			</select><br>
			<label for="broj2"><strong>Unesite drugi broj:</strong></label>
			<input type="text" name="broj2" id="broj2"><br>
			<input type="submit" name="calculate" id="calculate" value="IZRAČUNAJ">
			<?php include "functions.php"; ?>
		</form>
	</body>
</html>