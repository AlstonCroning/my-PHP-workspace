<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>304 Using a SELECT tag</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/basic_2.css" type="text/css" />
</head>

<body>

<h3>College Report</h3>

<?php
	$firstname = $_POST['firstname'];
	$position = $_POST['position'];
	
	print "<p>You are <span class='textblue'> $firstname</span> and ";
	print "your position at college is: <span class='textblue'> $position </span></p>";
?>

</body>
</html>