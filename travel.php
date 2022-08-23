<!DOCTYPE html>
<html>
<head>
	<title>Travel Destination</title>
</head>

<body>
	<h1>Your Destination</h1>
	<?php
		$travelDest = $_POST['travelDest'];
		$numNights = $_POST['numNights'];
		
		$romeCost = 1400.00;
		$toykoCost = 1800.00;
		
		$nightRome = 700.00;
		$nightToyko = 1200.00;
		
		
		
		if ($travelDest == "Rome")
		{
			$totalNight = $nightRome * $numNights;
			$totalCost = $totalNight + $romeCost;
			print("<p>The cost of the flight is $$romeCost and the total cost of night(s) stay is $totalNight. Your total cost is $$totalCost</p>");
		}
		else if ($travelDest == "Toyko")
		{
			$totalNight = $nightToyko * $numNights;
			$totalCost = $totalNight + $toykoCost;
			print("<p>The cost of the flight is $$toykoCost and the total cost of night(s) stay is $totalNight. Your total cost is $$totalCost.</p>");
		}
		else 
			print("<p>Invalid Destination.</p>");
		
		
	?>
</body>
</html>
