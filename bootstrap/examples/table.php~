<?php
include('connection.php');
$result = mysql_query('SELECT myInputName FROM prefer') or die('Invalid query: ' . mysql_error());
$row_first = mysql_fetch_array($result);
mysql_data_seek($result , (mysql_num_rows($result)-1));

$row_last =  mysql_fetch_array($result);
//echo $result;
echo $s=$row_last['myInputName'];

echo $s1=$_REQUEST['type'];
$r=mysql_query("SELECT *
FROM tourguide
WHERE State = '$s'
AND TYPE = '$s1'");
Print "<table border cellpadding=3>";
while($row=mysql_fetch_array($r))
 
 { 
 echo "<tr>"; 
	echo "<div id='no-more-tables'><th>Agency Name:</th><div id='no-more-tables'> <td>".$b=$row['Name_of_Agency']."</td></tr>";


echo  "<div id='no-more-tables'><th>Address:</th><div id='no-more-tables'> <td>".$row['Address']."</td></tr>";

echo  "<div id='no-more-tables'><th>Region:</th><div id='no-more-tables'> <td>."$row['Region']."</td></tr>";
echo  "<div id='no-more-tables'><th>State:</th><div id='no-more-tables'> <td>."$row['State']."</td></tr>";
echo  "<div id='no-more-tables'><th>City:</th><div id='no-more-tables'> <td>."$row['City']."</td></tr>";
echo  "<div id='no-more-tables'><th>Contact Person:</th><div id='no-more-tables'> <td>."$row['Contact Person']."</td></tr>";
echo  "<div id='no-more-tables'><th>Type:</th><div id='no-more-tables'> <td>."$row['TYPE']."</td></tr>";
echo  "<div id='no-more-tables'><th>Phone:</th><div id='no-more-tables'> <td>."$row['Phone']."</td></tr>";
echo  "<div id='no-more-tables'><th>Email:</th><div id='no-more-tables'> <td>."$row['Email']."</td></tr>";
echo  "<div id='no-more-tables'><th>Fax:</th><div id='no-more-tables'> <td>."$row['Fax']."</td></tr>";
 } 
 Print "</table>"; 
 ?> 
