<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>309 Appending Text</title>
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
	
	$middle_init = 'Q.';

	$fullname = $firstname.' '.$middle_init.' '.$lastname;
	
	$factor = 5;
	
	$ageplus = $age + $factor;
	
	//$current_year = date('Y');
	
	$birth_year = date('Y') - $ageplus; 
	
	print "<p>Regarding ".$fullname;
	print "<br />Entered age of ".$age;
	print "<br />Our profile program concludes that your real age is: ".$ageplus;
	print "<br />and were born in the year ".$birth_year;
	print "<br />The current year is ".date('Y')."</p>";

?>

</body>
</html>