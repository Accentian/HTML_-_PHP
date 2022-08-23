<!DOCTYPE html>

<html>
<head>
	<title>Bank Balance</title>
	<link rel = "stylesheet" type = "text/css" href = "sample.css">
</head>
<body>
<h1>Bank Balance</h1>

	<?php
		$dataFile = fopen("data.txt","r");	

		$employee1 = fgets($dataFile);		
		$employee2 = fgets($dataFile);		
		$employee3 = fgets($dataFile);
		$employee4 = fgets($dataFile);		
		$employee5 = fgets($dataFile);		
		$employee6 = fgets($dataFile);
		$employee7 = fgets($dataFile);		
		$employee8 = fgets($dataFile);		
		$employee9 = fgets($dataFile);
		$employee10 = fgets($dataFile);		
		fclose($dataFile);
/*
		list($number1, $employee1) = explode(".", $employee1);
		list($number2, $employee2) = explode(".", $employee2);
		list($number3, $employee3) = explode(".", $employee3);
		list($number4, $employee4) = explode(".", $employee4);
		list($number5, $employee5) = explode(".", $employee5);
		list($number6, $employee6) = explode(".", $employee6);
		list($number7, $employee7) = explode(".", $employee7);
		list($number8, $employee8) = explode(".", $employee8);
		list($number9, $employee9) = explode(".", $employee9);
		list($number10, $employee10) = explode(".", $employee10);
	*/	
		$totalBalance = $employee1 + $employee2 + $employee3 + $employee4 + $employee5 + $employee6 + $employee7 + $employee8 + $employee9 + $employee10;
		$avgBalance = $totalBalance/10.0;
		
		print("<p>AVERAGE BALANCE:     $$avgBalance</p>");
	?>