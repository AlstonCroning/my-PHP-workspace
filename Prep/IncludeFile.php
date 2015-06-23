<?php	//Include File
	//Reading Data from a File
	function MyReadFile($filename) 
	{
		$lines_in_file = count( file( $filename ) );
		$fp = fopen($filename, 'r'); //open the file for reading
		$MyArray = array();
		
		for ( $ii = 0; $ii < $lines_in_file; $ii++ ) 
		{
			$line = fgets($fp);
			$Data = trim( $line );
			$MyArray[$ii] = $Data;
		}
		fclose($fp);
		return $MyArray;
	}
?>