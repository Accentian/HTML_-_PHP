<!DOCTYPE html>

<!--
Brandon Ma
-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
</head>
 
<body>

	<h1>BUSINESS TRAVEL REIMBURSEMENT</h1>

	<?php
		$name = $_POST['name'];
		$miles = $_POST['miles'];
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];
		$hotel = $_POST['hotel'];
		
		$ratePerMile = 0.35;
		
		$reimbursement = 0;
		$mileCostReturn = 0;
		$breakfastReim = 8.50;
		$lunchReim = 12.50;
		$dinnerReim = 18.50;
		$hotelReim = 110.00;
		
		
		if($miles > 3000)
				print("<p>ERROR: Invalid input</p>");
			
			
		elseif($miles < 10)
				$mileCostReturn = 0 * $ratePerMile;
		else
			$mileCostReturn = $miles * $ratePerMile;
	
		if($breakfast == YES)
			$breakfastReim = 8.50;
		else
			$breakfastReim = 0;
		
		if($lunch == YES)
			$breakfastReim = 12.50;
		else
			$lunchReim = 0;
		
		if($dinner == YES)
			$dinnerReim = 18.50;
		else
			$dinnerReim = 0;
		
		if($hotel == YES)
			$hotelReim = 110.00;
		else
			$hotelReim = 0;
		
		
		$reimbursement = $mileCostReturn + $breakfastReim + $lunchReim + $dinnerReim + $hotelReim;
		
		print("<p>$name</p>");
		print("<p>Miles traveled: $mileCostReturn</p>");
		print("<p>Breakfast amount: $breakfastReim</p>");
		print("<p>Lunch amount: $lunchReim</p>");
		print("<p>Dinner amount: $dinnerReim</p>");
		print("<p>Hotel amount: $hotelReim</p>");
		print("<p>TOTAL REIMBURSEMENT: $reimbursement</p>");
	

	?>

</body>
</html>

  </body>
</html>
