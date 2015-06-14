<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>503 Reading a File</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/0000_Assignment1.css" type="text/css" />
</head>

<body>

<h3>Reading from a File</h3>

<?php

	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	
	$filename = $DOCUMENT_ROOT.'Workspace/0503/data/'.'cities.txt';
	
	$lines_in_file = count( file( $filename ) );
	
	$fp = fopen($filename, 'r'); //open the file for reading

	for ( $ii = 1; $ii <= $lines_in_file; $ii++ ) 
	{
		$line = fgets($fp);
		$city = trim( $line );
	
		print 'City: '.$city.'<br />';
	}
	
	fclose($fp);

?>

</body>
</html>
