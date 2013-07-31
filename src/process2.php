<?php
//echo $at=$_POST['hotelname'];
$detail=$_GET["q"];
include('connection.php');
$pq=mysql_query("SELECT * FROM hotelinfo WHERE HOTEL_NAME='".$detail."'");
echo '<center>';
echo '<h5>';
Print "<table border cellpadding=3>"; 
while($row=mysql_fetch_array($pq))
{
   echo "<div id='no-more-tables'><th>Hotel Name:</th> <div id='no-more-tables'> <td>".$b=$row['HOTEL_NAME']."</td></tr>";
  
echo "<tr>"; 
	echo "<h1>"."<div id='no-more-tables'><th>Hotel Address:</th> <div id='no-more-tables'><td>".$b=$row['ADDRESS']."</td>"."</h1></tr>";
	
	
echo "<tr>"; 
	echo "<div id='no-more-tables'><th>STATE:</th> <div id='no-more-tables'><td>".$b=$row['STATE']."</td></tr>";
 
	echo "<tr>"; 
	echo "<div id='no-more-tables'><th>Hotel Email ID:</th> <div id='no-more-tables'><td>".$b=$row['EMAIL ID']."</td></tr>";
 
	echo "<tr>"; 
	echo "<div id='no-more-tables'><th>Hotel FAX:</th> <div id='no-more-tables'><td>".$b=$row['FAX']."</td></tr>";
 
	echo "<tr>"; 
	echo "<div id='no-more-tables'><th>Number Of Rooms In Hotel:</th> <div id='no-more-tables'><td>".$b=$row['Rooms']."</td></tr>";
       
	   echo "<tr>"; 
	echo "<div id='no-more-tables'><th>Hotel Type:</th> <div id='no-more-tables'><td>".$b=$row['TYPE']."</td></tr>";

	echo "<tr>"; 
	echo "<div id='no-more-tables'><th>Hotel Phone NO.:</th><div id='no-more-tables'><td>".$b=$row['PHONE']."</td></tr>";
         
		 echo "<div id='no-more-tables'><th>Website:</th><div id='no-more-tables'><td><a href=".$b=$row['WEBSITE'].">".$b=$row['WEBSITE']."</a></td></tr>";

}
Print "</table>"; 
?>
