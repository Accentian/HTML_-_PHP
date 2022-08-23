<!DOCTYPE html>
<!--
Brandon Ma
-->

<html>
<head>
	<title>Math Calculation</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>Calculation Results</h1>

	<?php
		include("calcMathProblems.php");
		
		$integer[0] = $_POST['integer0'];
		$integer[1] = $_POST['integer1'];
		
		$sum = getSum($integer[0], $integer[1]);
		$dif = getDif($integer[0], $integer[1]);
		$mult = getMult($integer[0], $integer[1]);
		$div = getDiv($integer[0], $integer[1]);
		
		print("<p>SUM: $sum</p>");
		print("<p>DIFFERENCE: $dif</p>");
		print("<p>MULTIPLICATION: $mult</p>");
		print("<p>DIVISION: $div</p>");
	?>
		

</body>

</html>