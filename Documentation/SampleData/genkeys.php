<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Generate SQL Data</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif">




<table style="width: 100%">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php
	for ( $x=1 ; $x<=100 ; $x++){
	echo '<tr>';
	echo '<td>&nbsp;'.'created in sql'.'</td>';
	echo '<td>&nbsp;'.'PETRAGROUP\CDM-ABCDE'.$x.'</td>';
	echo '<td>&nbsp;'.'PETRAGROUP\USERX'.$x.'</td>';
	echo '<td>&nbsp;'.'10.190.113'.$x.'</td>';
	echo '<td>&nbsp;'.md5($x+5).'</td>';
	echo '<td>&nbsp;'.md5($x+6).'</td>';
	echo '<td>&nbsp;'.rand(1, 6).'</td>';
	echo '<td>&nbsp;'.md5($x+8).'</td>';
	echo '<td>&nbsp;'.md5($x+9).'</td>';
	echo '</tr>';
	}
	?>
</table>




</body>

</html>
