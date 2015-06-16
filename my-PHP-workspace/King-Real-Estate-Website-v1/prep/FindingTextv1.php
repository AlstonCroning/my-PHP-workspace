<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>King Real Estate - Finding Text</title>
	<meta name="author" content="Alston" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
	<?php
		include "IncludeFile.php";
		
		$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		$filename = $DOCUMENT_ROOT.'Workspace/Assignment4/prep/testfile.txt';
		$GetData = MyReadFile($filename);		
	?>
	

	<p class="titlepara"> Searching Text in a TextFile </p>

	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

		<P> Search Text: 
			<input type="text" name="searchtext" /> 
		</p>
		
	</form>
		<?php
			if( isset($_POST['searchtext'])) 
			{
				$GetUserInputData = $_POST['searchtext'];
			}
			else
			{
				$GetUserInputData = '';
			}

			$MatchData = '/\b'.$GetUserInputData.'./i';


			$count = 0;
			while( !empty($GetData[$count]) )
			{
				if( empty($GetData[$count]) )
				{
					break;
				}
					if(preg_match( $MatchData, $GetData[$count] ))
					{
						echo $DataDisplay = "Match found for: '".$GetUserInputData."'";
					}
					else
					{
						echo $DataDisplay = "No match!!!";					
					}

				$count++;
			}
	
		?>
	
	

</body>
</html>
