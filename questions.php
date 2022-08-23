<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Style-Type" content="text/css" /> 
    <title>questions.php</title>
    <link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
    <link href="/library/skin/durham/tool.css" type="text/css" rel="stylesheet" media="all" />
    <script type="text/javascript" src="/library/js/headscripts.js"></script>
    <style>body { padding: 5px !important; }</style>
  </head>
  <body>
<!DOCTYPE html>
<!--	Author: Margie Dietz
		Date:	4/15/17
		File:	questions.html
		Purpose:Form to get name, and security quesitons
		Modified: to delete matching names from db before inserting  4/20   -MAD and ARC
		Modified: Added addslashes() to deal with apostrophes  4/24 -MAD
-->
<html>

<head>
	<title>Security Questions Form</title>
	<link rel ="stylesheet" type="text/css" href="didYouKnow.css" />
</head>
<body>

	<h1>  Review </h1>
	<?php
	
		//function addslashes() inserts backslashes before quotes to prepare the string for MySQL.
		$fname = addslashes($_POST['fname']);
		$lname = addslashes($_POST['lname']);
		
		$question1 = addslashes($_POST['question1']);
		$question2 = addslashes($_POST['question2']);
		$question3 = addslashes($_POST['question3']);
		
		$answer1 = addslashes($_POST['answer1']);
		$answer2 = addslashes($_POST['answer2']);
		$answer3 = addslashes($_POST['answer3']);
		
        
		$server = "localhost";
		$user = "wbip";
		$pw = "wbip123";
		$db = "test";

		$connect=mysqli_connect($server, $user, $pw, $db);

		if( !$connect)
		{
			die("ERROR: Cannot connect to database $db on server $server
			using user name $user (".mysqli_connect_errno().
			", ".mysqli_connect_error().")");
		}
		
		$sql_del ="DELETE FROM questions WHERE firstName='$fname' AND lastName='$lname'";
		$sql = "INSERT INTO questions VALUES
		 ('$fname', '$lname', '$question1', '$answer1', '$question2', '$answer2', '$question3', '$answer3') ";


		$result = mysqli_query($connect, $sql_del);
		// this will fail if the record did not exist;  We don't really care if it does
		
		$result = mysqli_query($connect, $sql);
		if (!$result)
		{
			die("Could not successfully insert record into $db: " . mysqli_error($connect) );
		}
		else
			print ("<p> Successfully Inserted $fname $lname questions into the database.</p> ");
	
	?>
</body>
</html>
  </body>
</html>
