<!DOCTYPE html>
<!--
Brandon Ma
-->

<html>
<head>
	<title>Rainfall</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>Rainfall Results</h1>

	<?php
		$rainfall[0] = $_POST['rainfall0'];
		$rainfall[1] = $_POST['rainfall1'];
		$rainfall[2] = $_POST['rainfall2'];
		$rainfall[3] = $_POST['rainfall3'];
		$rainfall[4] = $_POST['rainfall4'];
		$rainfall[5] = $_POST['rainfall5'];
		$rainfall[6] = $_POST['rainfall6'];
		$rainfall[7] = $_POST['rainfall7'];
		$rainfall[8] = $_POST['rainfall8'];
		$rainfall[9] = $_POST['rainfall9'];
		$rainfall[10] = $_POST['rainfall10'];
		$rainfall[11] = $_POST['rainfall11'];
		
		$highestRainfall = 0;
		$lowestRainfall = $rainfall[0];
		
		$averageRainfall = ($rainfall[0] + $rainfall[1] + $rainfall[2] + $rainfall[3] + $rainfall[4] + $rainfall[5] + $rainfall[6] + $rainfall[7] + $rainfall[8] + $rainfall[9] + $rainfall[10] + $rainfall[11]) / 12;
		
		for($i = 0; $i < sizeof($rainfall); $i = $i + 1)
			
		if($rainfall[$i] > $highestRainfall)
		{
			$highestRainfall = $rainfall[$i];
		}
		
		for($i = 0; $i < sizeof($rainfall); $i = $i + 1)
		
		if($rainfall[$i] < $lowestRainfall)
		{
			$lowestRainfall = $rainfall[$i];
		}
		
		print("<p>The AVERAGE amount of rainfall is: $averageRainfall</p>");
		print("<p>The HIGHEST amount of rainfall is: $highestRainfall</p>");
		print("<p>The LOWEST amount of rainfall is: $lowestRainfall</p>");
		
		if($averageRainfall > 10)
			print("<p>It was a wet season.</p>");
		else
			print("<p>It was a dry season.</p>");
	?>
</body>
</html>
