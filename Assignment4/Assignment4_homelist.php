<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>King Real Estate - Homelist page</title>
	<meta name="author" content="Alston" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>

<body>

	<div id="logoimage">
		<a href="http://localhost/Workspace/Assignment4/Assignment4_mainpage.php"><img src="images/logo.png" /></a>
	</div>


	
	<?php
	//setting up the house images directory for reading images
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$dirname = $DOCUMENT_ROOT.'Workspace/Assignment4/house_images';//house images directory name
	$dirhandle = opendir($dirname); //directory pointer
	
	
	//loads all the images
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
	foreach ( $houseimages as $element)
	{
		$imagename = 'house_images/'.$element;
		print "<p><img src='".$imagename."' /></p>";
	}

	?>

	

</body>
</html>
