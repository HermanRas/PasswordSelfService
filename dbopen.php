<?php
// Replace the value of these variables with your own data
$user = 'PasswordSelfService';
$pass = 'P@ssword$elf$ervice';
$server = 'DAT-SER-SQL-01';
$database = 'PasswordSelfService';

//connect to a DSN "myDSN" 
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database"; 
$conn = odbc_connect($connection_string,$user,$pass);

?>
