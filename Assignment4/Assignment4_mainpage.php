<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>King Real Estate - Main page</title>
	<meta name="author" content="Alston" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>

<body>

	<div id="logoimage">
		<a href="http://localhost/Workspace/Assignment4/Assignment4_mainpage.php"><img src="images/logo.png" /></a>
	</div>

	<div id="divfeaturedhome">
		<p>Featured Home!</p>
	</div>

	<div id="divsearchcity">
	<form method="post" action="Assignment4_homelist.php">
		<p id="p_entercity_divsearchcity">Enter City</p>
		<input type="text" name="entercity" size="30"/>
		<br />Leave blank to find all houses listed)
		<p><input type="submit" name="searchcitybutton" value="Find Homes" /></p>
		<p>Note: Houses only available in the following cities:<br/>
		Banff, Canmore, Oakwood, Luckyville</p>
	</form>
	</div>

	<div id="divrealtorspanel">
		<p>Our Realtors</p>
	</div>

	<div id="divguestbookandcalc">
		<p><a href="http://localhost/Workspace/Assignment4/Assignment4_guest_calc.php">GuestBook/Mortgage Calculator</a></p>
	</div>

</body>
</html>
