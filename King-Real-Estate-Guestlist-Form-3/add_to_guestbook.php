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

<div class="signupform">

<p class="titlepara">Thank you! A representative will contact you soon.</p>

<?php

	////////////////////////////////////////////////////////////////
	//////////////////////Gather Information////////////////////////
	////////////////////////////////////////////////////////////////
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$comments = $_POST['comments'];
	$contactinformation = $_POST['contactinformation'];
	$radiobuttongroup1 = $_POST['radiobuttongroup1'];
	$fullname = $firstname.' '.$lastname;
	
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

	////////////////////////////////////////////////////////////////
	//////////////////////Appends data to a file////////////////////
	////////////////////////////////////////////////////////////////
	
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$filename = $DOCUMENT_ROOT.'Workspace/King-Real-Estate-Guestlist-Form-3/data/guestbook.txt';
	$lines_in_file = count( file( $filename ) );
	
	$fp = fopen($filename, 'a'); //open the file for writting data
	
	$formateddata = "";

	if( ($firstname != '') && ($lastname!= '') ) {
		$formateddata .= $firstname.'|'.$lastname.'|';
		
		if( $contactinformation != '' || $city != '' || $comments != '') {
				
				if ($contactinformation != '')
					$formateddata .= $contactinformation.'|';
				
				if ($city != '' && $city != 'n/a')
					$formateddata .= $city.'|';
				
				if ($comments != '')
					$formateddata .= $comments.'|';

				//$formateddata .= $contactinformation.'|'.$city.'|'.$comments.'|';
	
			$formateddata .= ''."\n";
		}
		else {
			$formateddata .= ''."\n";
		}
		
		fwrite($fp, $formateddata);
		fclose($fp);
	}
	else
	{
		print "<p>you must enter your full name</p>";
	}
?>

</div>

</body>
</html>