<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>King Real Estate - Thank you!</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>

<body>

<div id="logoimage">
	<img src="images/logo.png" />
</div>

<p id="titlepara">Thank you! A representative will contact you soon.</p>

<?php
	/**************************************************
	/*Gathering Information
	/*************************************************/
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$comments = $_POST['comments'];
	$contactinformation = $_POST['contactinformation'];
	$radiobuttongroup1 = $_POST['radiobuttongroup1'];

	$fullname = $firstname.' '.$lastname;
	$error_Flag = '';
	$error_message = '';
	
	/**************************************************
	/*Validating Information
	/*************************************************/	

	if($firstname == '')
	{
		$error_message .= "<span class='errormsg'>You must enter Your First Name!</span><br />";		
	}
	if($lastname == '')
	{
		$error_message .= "<span class='errormsg'>You must enter your Last Name!</span><br />";
	}
	if($contactinformation == '')
	{
		$error_message .= "<span class='errormsg'>You must enter your Contact Information!</span><br />";
	}		
	if($city == '-')
	{
		$error_message .= "<span class='errormsg'>You must enter a city!</span><br />";
	}	

	if( empty($firstname) || empty($lastname) || empty($contactinformation) || $city == '-' )
	{
		$error_Flag = 'YES';
	}
	else
	{
		$error_Flag = 'NO';
	}

	/**************************************************
	/*Displaying Information
	/*************************************************/

	if( $error_Flag != '')
	{
	
		//Error Condition
		if($error_Flag == 'YES')
		{
			print $error_message;
		}

		//if NO ERRORS
		else
		{
			print "<p>Information Submited for: ".$fullname."</p>";

			if ( $radiobuttongroup1 == "phone" )
			{
				print "<p>Your Phone is ".$contactinformation;
			} 
			else 
			{
				print "<p>Your Email is ".$contactinformation;
			}	

			print "<br /> and you are interested in living in $city </p>";
			print "<p>Our representative will review your comments below:</p>";
			print "<p><textarea class='textdisabled' rows='5' cols='50' disabled='disabled'>$comments</textarea></p>";			
		}
	}
	else
	{
		print "Unexpected error";
	}

?>

</body>
</html>