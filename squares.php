<!DOCTYPE html>
<!--
Brandon Ma
-->

<html>
<head>
	
	<title>Squares</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />

</head>

<body>

	<?php
		$startValue = $_POST['startValue'];
		$endValue = $_POST['endValue'];
		$increment = $_POST['increment'];
		
		print ("<h1>SQUARES</h1><hr />");
		
		for($number = $startValue; $number <= $endValue; $number = $number + $increment)
		{
			$squared = $number * $number;
			print ("The square of $number is $squared</br>");
		}
		
		print ("<hr />");
	?>

</body>
</html>