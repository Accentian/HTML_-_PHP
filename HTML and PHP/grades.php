<!DOCTYPE html>

<!--
Brandon Ma
-->

<html>
<head>
	
	<title>Grades Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />

</head>

<body>

<?php
	$gradesFile =fopen("grades.txt","r");
	$gradeRecord = fgets($gradesFile);
	$sum = 0;
	$grades = 0;
	$highestGrades = 0;
	
	while ( !feof($gradesFile) )	
	{
		list($name, $grades) = 
				 explode (":", $gradeRecord);
		print ("$name $grades <br />");
		
		$sum = $sum + $grades;
		
		if($grades > $highestGrades)
		{
			$highestGrades = $grades;
			$highestName = $name;
		}
		
		$gradeRecord = fgets($gradesFile);
	}
	fclose($gradesFile);				
	$averageGrades = $sum / 10;
	
	print("<p>Average Grades: $averageGrades</p>");
	print("<p>HIGHEST GRADE SCORED BY $highestName: $highestGrades</p>");
	
?>  

</body>
</html>