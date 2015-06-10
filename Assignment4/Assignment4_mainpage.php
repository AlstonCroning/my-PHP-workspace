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
		<p class="pdivfeaturedhome">Featured Home!</p>
	<?php
	//setting up the house images directory for reading images
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$dirname = $DOCUMENT_ROOT.'Workspace/Assignment4/house_images';//house images directory name
	$dirhandle = opendir($dirname); //directory pointer
	
	//loads the Featured image
	if($dirhandle)
	{
		$houseimages = array();
		while( false != ($file = readdir($dirhandle)))
		{
			if( $file != '.' && $file != '..' )
			{
				array_push( $houseimages, $file);
			}
		}		
	}
	sort($houseimages);
	$imagename = 'house_images/2-twolevelhouse.jpg';
	print "<p><img src='".$imagename."' /></p>";
	
	//Gatthering Featured House Information
	$filename = $DOCUMENT_ROOT.'Workspace/Assignment4/house_info/2-twolevelhouse.txt';
	$lines_in_a_file = count(  file($filename)  );
	$fp = fopen( $filename, 'r'); //open the file for reading the data

	if( !feof($fp) )
	{
		for($ii = 0; $ii < $lines_in_a_file; $ii++)
		{
			$line =	fgets( $fp );
		}
		print "<p>Amazing Home!!</p>";
		print "<br />".$line;
	}
	else
	{
		print "<p>No Information Provided</p>";
	}
	fclose($fp);
	?>		
	</div>

	<div id="divsearchcity">
	<form method="post" action="Assignment4_homelist.php">
		<p id="p_entercity_divsearchcity">Enter City</p>
		<input type="text" name="entercity" size="30"/>
		<br />(Leave blank to find all houses listed)
		<p><input type="submit" name="searchcitybutton" value="Find Homes" /></p>
		<p>Note: Houses only available in the following cities:<br/>
		Banff, Canmore, Oakwood, Luckyville</p>
	</form>
	</div>

	<div id="divrealtorspanel">
		<p id="p_divrealtorspanel">Our Realtors</p>
	<?php
	//setting up the house images directory for reading images
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$dirname = $DOCUMENT_ROOT.'Workspace/Assignment4/realter_images';//house images directory name
	$dirhandle = opendir($dirname); //directory pointer
	$counter = 0;

	//load all the realator images
	if($dirhandle)
	{
		$realatorimages = array();
		while( false != ($file = readdir($dirhandle)))
		{
			if( $file != '.' && $file != '..' )
			{
				array_push( $realatorimages, $file);
			}
		}		
	}
	sort($realatorimages);
	foreach ( $realatorimages as $element)
	{
		$imagename = 'realter_images/'.$element;
		print "<p><img src='".$imagename."' /><p>";
		$realatornames = $realatorimages[$counter];
		$realatornames = str_replace( '.jpg', '', $realatornames);
		echo "<p>".$realatornames."</p>";
		$counter++;
	}	
	?>		
	</div>

	<div id="divguestbookandcalc">
		<p><a href="http://localhost/Workspace/Assignment4/Assignment4_guest_calc.php">GuestBook/Mortgage Calculator</a></p>
	</div>

</body>
</html>
