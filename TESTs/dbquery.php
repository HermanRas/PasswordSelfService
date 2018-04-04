<?php
 if ($conn)
  { 
  //the SQL statement that will query the database 
  $query = "select * from UserData"; 
  //perform the query 
  $result=odbc_exec($conn, $query); 

  echo "<table border=\"1\"><tr>"; 

  //print field name 
  $colName = odbc_num_fields($result); 
  for ($j=1; $j<= $colName; $j++) 
  {  
    echo "<th>"; 
    echo odbc_field_name ($result, $j ); 
    echo "</th>"; 
  } 

  //fetch tha data from the database 
  while(odbc_fetch_row($result)) 
  { 
    echo "<tr>"; 
    for($i=1;$i<=odbc_num_fields($result);$i++) 
    { 
      echo "<td>"; 
      echo odbc_result($result,$i); 
      echo "</td>"; 
    } 
    echo "</tr>"; 
  } 

  echo "</td> </tr>"; 
  echo "</table >"; 
 } 
else echo "odbc not connected"; 
?>
