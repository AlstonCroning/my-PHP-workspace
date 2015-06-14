<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>King Real Estate signup Form</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>

<body>

<div id="logoimage">
	<img src="images/logo.png" />
</div>

<div id="mortgagepagestyle">

<p class="titlepara">Mortgage Calculation</p>

<?php
	$amountfinanced = $_POST['amtfinance'];
	$interestrate = $_POST['interestrate'];

	$interestratecalc = $interestrate / 100;

	$monthlypayment = ($amountfinanced * $interestratecalc) / 12;
	$monthlypayment_formated = number_format( $monthlypayment, 2);
	
	
	if( is_numeric($amountfinanced) && is_numeric($interestrate) )
	{
		print '<p>If you finance $'.$amountfinanced.' at an interest rate of '.$interestrate.'%</p>';
		print '<p>Your Monthly Payment would be $'.$monthlypayment_formated.'</p>';
	}
	else	
	{
		print '<p> You Must Enter Numerics in the Field </p>';	
	}
	
?>

</div>

</body>
</html>