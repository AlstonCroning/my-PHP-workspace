<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Connecting PHP with MySQL</title>
	<meta name="author" content="Alston" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="styles/styles.css" type="text/css" />
	<script type="text/javascript"></script>
</head>

<body>
<?php

$db = new mysqli('localhost','root','');

if(!$db) 
{
	print "<h1>Unable to connect to MYSQL</h1>";
	exit();
}

$dbname = 'sampledatabase';


$btest = mysqli_select_db($db ,$dbname);

if(!$btest)
{
	print "<h1>Unable to Select the Database</h1>";
}

$Sql_Statement = "SELECT * ";
$Sql_Statement .= "FROM Employee";

$result = mysqli_query($db, $Sql_Statement);

for($ii = 0; $ii < 2; $ii++)
{
	$row = mysqli_fetch_array($result);
	print $row['firstname']."<br />";
	print $row['lastname']."<br />";
}

?>
</body>
</html>
