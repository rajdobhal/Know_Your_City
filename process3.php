<?php
include('connection.php');
$result = mysql_query("SELECT `STATE` FROM `prefer`") or die('Invalid query: ' . mysql_error());
$row_first = mysql_fetch_array($result);
mysql_data_seek($result , (mysql_num_rows($result)-1));

$row_last =  mysql_fetch_array($result);
//echo $result;
$s=$row_last['STATE'];

$s1=$_GET["q"];
$m=mysql_query("SELECT *
FROM `tourguide`
WHERE `State` = '$s'
AND `Name_of_Agency` = '".$s1."'");

echo '<center>';
echo '<h5>';


while($row=mysql_fetch_array($m))
{ 
   
Print "<table border cellpadding=4>";
echo "<tr>";
	echo "<th>Agency Name</th> <td>".$b=$row['Name_of_Agency']."</td></tr>";

echo "<tr>";
echo  "<th>Address</th> <td>".$b=$row['Address']."</td></tr>";
echo "<tr>";
echo "<th>Region</th> <td>".$b=$row['Region']."</td></tr>";
echo "<tr>";
echo "<th>State</th> <td>".$b=$row['State']."</td></tr>";
echo "<tr>";
echo "<th>City</th> <td>".$b=$row['City']."</td></tr>";
echo "<tr>";
echo "<th>Contact Person</th> <td>".$b=$row['Contact_Person']."</td></tr>";
echo "<tr>";
echo "<th>Type</th> <td>".$b=$row['TYPE']."</td></tr>";
echo "<tr>";
echo "<th>Phone</th> <td>".$b=$row['Phone']."</td></tr>";
echo "<tr>";
echo "<th>Email</th> <td>".$b=$row['Email']."</td></tr>";
echo "<tr>";
echo "<th>Fax</th> <td>".$b=$row['Fax']."</td></tr>";

//echo "<hr>";
Print "</table>"; 
echo "<br>";
echo "<br>";
}



?>
