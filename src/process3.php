<?php
include('connection.php');
//echo $result;
$s=$_REQUEST["q"];


$m=mysql_query("SELECT *
FROM `tourguide`
WHERE `Name_of_Agency` = '".$s."'");

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
