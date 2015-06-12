<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>King Real Estate - Signup Form</title>
	<meta name="author" content="Alston" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>

<body>

<div id="logoimage">
	<a href="http://localhost/Workspace/Assignment4/Assignment4_mainpage.php"><img src="images/logo.png" /></a>
</div>


<div class="signupform">
	<p class="titlepara">Please sign up on our guest list</p>
	
	<form method="post" action="Assignment4_add_to_guestbook.php">

		<p>
			First Name:<br />
			<input type="text" name="firstname" size="30" />
		</p>

		<p>
			Last Name:<br />
			<input type="text" name="lastname" size="30" />
		</p>

		<p>
			Contact Information: 
			<input type="radio" name="radiobuttongroup1" value="phone" checked="checked" />
			Phone
			<input type="radio" name="radiobuttongroup1" value="Email" />
			Email
			<br />
			<input type="text" name="contactinformation" size="45" />
		</p>

		<?php
			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
			$filename = $DOCUMENT_ROOT.'Workspace/Assignment4/data/'.'cities.txt';
			$lines_in_file = count( file( $filename ) );
			
			$fp = fopen($filename, 'r'); //open the file for reading
			$counter = 1;
			
			print '<p>';
			print 'City Where You Want to Reside:<br />';
			print '<select name="city" size="1">';
			print	'<option value="n/a">-</option>';
			
			for ( $ii = $counter; $ii <= $lines_in_file; $ii++ ) 
			{
				$line = fgets($fp);
				$city = trim( $line );
				$counter = $ii;
				print	'<option value="'.$city.'">'.$ii.': '.$city.'</option>';
			}

			print '</select>';
			print '</p>';
			
			fclose($fp);
		?>

		<p>
			Comments:<br />
			<textarea name="comments" rows="5" cols="50"></textarea>
		</p>
		
		<p><input type="submit" value="Submit Information" /></p>

	</form>

	<p>For Admin Use Only: <a href="Assignment4_view_guestbook.php" target="_blank">View Guestbook</a></p>
	
</div>

<div id="morgageform">
	<form method="post" action="Assignment4_mortgage.php">
		<p class="titlepara">Mortgage Calculator</p>

		<table>
			<tr>
				<td>Amount Financed</td>
				<td><input type="text" name="amtfinance" size="10px" /></td>
			</tr>

			<tr>
				<td>Interest Rate</td>
				<td><input type="text" name="interestrate" size="10px" /></td>
			</tr>
		</table>

		<p><input type="submit" value="Calculate Payment" /></p>
	</form>
</div>

</body>
</html>
