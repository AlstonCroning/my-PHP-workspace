<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>King Real Estate - GuestBook</title>
<meta name="author" content="Alston" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/styles.css" type="text/css" />
</head>

<body>

<div id="logoimage">
	<img src="images/logo.png" />
</div>

<p id="titlepara2">View GuestBook</p>

<?php
	//setting up the guestbook.txt for reading
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$filename = $DOCUMENT_ROOT.'Workspace/Assignment3/data/guestbook.txt';
	$lines_in_a_file = count(  file($filename)  );
	$fp = fopen( $filename, 'r'); //open the file for reading the data


	
	if( feof($fp) )
	{
		echo "<p>There are no names in the Guestbook</p>";
	}	
	else
	{
		echo '<table border="1">'."\n";
		echo '<tr>'."\n";
		echo	'	<th>First Name</th>'."\n";
		echo	'	<th>Last Name</th>'."\n";
		echo	'	<th>Contact Information</th>'."\n";
		echo	'	<th>City</th>'."\n";
		echo	'	<th>Comments</th>'."\n";
		echo '</tr>'."\n";

	$counter = 0;	
		while(true){
		$counter++;
		//$id ='stylerows1';	

/*
	$remainder =  $lines_in_a_file % 2 ;

		if( $remainder != 0)
		{
			//$style_row = 'style="color:white"';
			$id ='stylerows1';		
		}
		else
		{
			//$style_row = 'style="color:blue"';
			$id = 'stylerows2';					
		}
*/	
			$OriginalData = fgets( $fp );
			$SeperatedData = explode('|', $OriginalData);

			if(!feof($fp))
			{
				$id ='stylerows1';
				
					$remainder =  $counter % 2;	
					if($remainder != 0)
					{
						$id ='stylerows1';
					}
					else
					{
						$id = 'stylerows2';
					}

					echo	"<tr id='".$id."'>"."\n";
					
					for( $ii = 0; $ii < 5; $ii++ ) 
					{
						echo	"	<td>".$SeperatedData[$ii]."</td>"."\n";
						//continue;
					}
			
					/*
						if( $id == 'stylerows1')
						{
							echo	"	<td id='".$id."'>".$SeperatedData[$ii]."</td>"."\n";
							$id = 'stylerows2';						
						}
						else
						{
							echo	"	<td id='".$id."'>".$SeperatedData[$ii]."</td>"."\n";
							$id = 'stylerows1';
						}
					*/

				echo	"</tr>"."\n";	
			}
			else 
			{
				break;
			}
		}
		echo '</table>'."\n";
	}
	fclose($fp);
?>	

</body>
</html>