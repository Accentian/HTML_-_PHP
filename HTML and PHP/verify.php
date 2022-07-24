<!DOCTYPE html>
<!--	Author: Margie Dietz
		Date:	4/15/17
		File:	questions.html
		Purpose: Receives the userAnswer and dbAnswer, and checks to see if they match
-->


<html>

<head>
	<title>Verify Security Question</title>
	<link rel ="stylesheet" type="text/css" href="didYouKnow.css" />
</head>
<body>

	<h1>  Verify Security Question </h1>
	<?php
	
		$userAnswer = $_POST['userAnswer'];
		$dbAnswer = $_POST['dbAnswer'];

		print("<p>$userAnswer  $dbAnswer</p>");
		
		if ($userAnswer == $dbAnswer)
			print("<p>Security questions match.</p>");
		else
			print("<p>Security questions do not match.</p>");
			print("<a href = \"verify.html\">Try again</a>");
	?>
</body>
</html>