<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>308 Assigning Values</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/basic_2.css" type="text/css" />
</head>

<body>

<h3>Sucess!!</h3>

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$fullname = "$firstname $lastname";
	
	$factor = 5;
	
	$ageplus = $age + $factor;
	
	$current_year = date('Y');
	
	$birth_year = $current_year - $ageplus; 
	
	print "<p>Your name is $fullname ";
	print "and you say your age is $age ";
	print "but I bet you are really $ageplus ";
	print "and were born in $birth_year</p>";

?>

</body>
</html>