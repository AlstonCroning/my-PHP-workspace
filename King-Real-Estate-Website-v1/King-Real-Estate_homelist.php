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
		<a href="index.php"><img src="images/logo.png" /></a>
	</div>

	<p class="paragraphHeading1">Current Listings</p>
	
	<?php
	//Gathering User Searched Info
	$UserSearchInfo = $_POST['entercity'];
	
	//setting up the house images directory for reading images
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$dirname = $DOCUMENT_ROOT.'Workspace/King-Real-Estate-Website-v1/house_images';//house images directory name
	$dirhandle = opendir($dirname); //directory pointer

	//loads the all the images into $houseimages array
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
	sort($houseimages);//sort the array

	//if Search Field is blank
	if( empty($UserSearchInfo) )
	{
		foreach ( $houseimages as $element)
		{
			//load the all images into the page
			$imagename = 'house_images/'.$element;
			print "<p><img src='".$imagename."' /></p>";

			//get imagefilename and change the filename from .jpg to .txt
			$saveinfo = $element;
			$houseinfofilenames = str_replace( 'jpg' , 'txt' , $saveinfo );

			//Setting up each House Information files for reading
			$filename = $DOCUMENT_ROOT.'Workspace/King-Real-Estate-Website-v1/house_info/'.$houseinfofilenames;
			$lines_in_a_file = count(  file($filename)  );
			$fp = fopen( $filename, 'r'); //open the file for reading the data

			//reads each file information and display as required
			if( !feof($fp) )
			{
				print "<div id='divhomeslist'><p class='paragraphHeading2'>";
				$line =	fgets( $fp );
				print "<br />".$line;
				print "</p>";
				$line =	fgets( $fp );			
				for($ii = 0; $ii < $lines_in_a_file; $ii++)
				{
					$line =	fgets( $fp );
					print "<br />".$line;				
				}
				print "</div>";
			}
			else
			{
				print "<p>No Information Provided</p>";
			}
			fclose($fp);//close each file
		}
	}

	//if the search field is Not blank
	else
	{
		print "<p>The City you Searched for: <span class='bold_paragraph_default_fontsize'>".$UserSearchInfo."</span></p>";	
		foreach ( $houseimages as $element)
		{
			//get imagefilename and change the filename from .jpg to .txt
			$saveinfo = $element;
			$houseinfofilenames = str_replace( 'jpg' , 'txt' , $saveinfo );
			
			//Setting up each House Information files for reading
			$filename = $DOCUMENT_ROOT.'Workspace/King-Real-Estate-Website-v1/house_info/'.$houseinfofilenames;
			$lines_in_a_file = count(  file($filename)  );
			$fp = fopen( $filename, 'r'); //open the file for reading the data
			
			//reads each file information and display as required
			if( !feof($fp) )
			{
				for($ii = 0; $ii < $lines_in_a_file; $ii++)
				{
					$line =	fgets( $fp );
					
					if( stripos($line,$UserSearchInfo) && $ii == 2 )
					{
						$savesubstring1 = substr( $line, 6); //gets the city as a string
						$savesubstring2 = substr( $savesubstring1, 0, 2); //gets the city as a string						
						$savesubstring3 = substr( $UserSearchInfo, 0, 2); //usersearch info

						$savesubstring1 = trim( $savesubstring1 );
						$savesubstring2 = trim( $savesubstring2 );							
						$savesubstring3 = trim( $savesubstring3 );
						
						if( !stripos($line,$UserSearchInfo) )
						{
							echo "No match!!!";
						}
						else
						{
							//load the required image into the page
							$imagename = 'house_images/'.$element;
							print "<p><img src='".$imagename."' /></p>";

							for($jj = 0; $jj < $lines_in_a_file; $jj++)
							{
								print "<br />".$line;
								$line =	fgets( $fp );
							}
						}
					}
				}
			}
			else
			{
				print "<p>No Information Provided</p>";
			}
			fclose($fp);//close each file
		}		
	}
	?>

</body>
</html>
