<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Welcome</title>
<meta name="author" content="Dishan" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="styles/basic.css" type="text/css" />
</head>

<body>

<h3>Success!</h3>

<?php
	$firstname = $_POST['firstname'];
	print "<p>Congratulations $firstname</p>";
?>

<p>I have just written my first PHP program!</p>

</body>

</html>