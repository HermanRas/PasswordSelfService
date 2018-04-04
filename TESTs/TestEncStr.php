<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
if (isset($_POST['EncString'])) {
	//check Query Sting for Value
	if ($_POST['EncString']==""){
		//no value exit
		echo ("Please Enter a String to Encrypt");
		}
		else{
		 echo (md5($_POST['EncString']));	
		}
	}
?>
<form name="EncriptString" action="TestEncStr.php" method="post">
<input type="text" value="string here" name="EncString" /><br />
<input type="submit" value="Encrypt String" />
</form>
</body>

</html>
