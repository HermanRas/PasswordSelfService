<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Crypt String</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif">
<?php
if(!isset($_POST['upload']))
	{
	echo '<form method="post" enctype="multipart/form-data">';
	echo '<input type="text" name="Key"> </br>';
	echo '<input type="submit" value="MD5 Crypt">';
	echo '</form>';
	}
?>
<?php
if(isset($_POST['Key']))
	{
	echo "</br>";
	echo ("KEY=".md5($_POST['Key']));
	}
?>

</body>

</html>
