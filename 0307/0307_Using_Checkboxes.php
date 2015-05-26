<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>307 Using Checkboxes</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/basic_2.css" type="text/css" />
</head>

<body>

<h3>Using Checkboxes</h3>

<?php
	$firstname = $_POST['firstname'];
	

	if (isset($_POST['BA'])) 
		{
			$BA = $_POST['BA'];
		} else {
			$BA = "";
	}

	if (isset($_POST['MA'])) 
		{
			$MA = $_POST['MA'];
		} else {
			$MA = "";
	}

	if (isset($_POST['phd'])) 
		{
			$phd = $_POST['phd'];
		} else {
			$phd = "";
	}	
	
	print "<p>You are <span class='textblue'> $firstname</span> and ";
	print "the degrees you have earned are: </p>";
	
	print "<p><span class='textblue'>$BA</span></p>";
	print "<p><span class='textblue'>$MA</span></p>";
	print "<p><span class='textblue'>$phd</span></p>";	
	
	/*
		if (isset($_POST['phd'])) {
			$phd = $_POST['phd'];
		}
		else {
			$phd = "";
		}
	*/
	
	
?>

</body>
</html>