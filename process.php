<?php
include('connection.php');
$result = mysql_query("SELECT `STATE` FROM `prefer`") or die('Invalid query: ' . mysql_error());
$row_first = mysql_fetch_array($result);
mysql_data_seek($result , (mysql_num_rows($result)-1));

$row_last =  mysql_fetch_array($result);
//echo $result;
echo $s=$row_last['STATE'];

echo $s1=$_GET["q"];
$r=mysql_query("SELECT `Name_of_Agency`
FROM tourguide
WHERE State = '$s'
AND TYPE = '$s1'");
?>




<html>
<head>









</head>
<body>
<form action="" method="POST">
<?php
	echo "<select name=\"Name_of_Agency\" onchange=\"tour(this.value)\">"; // Open your drop down box
      //  echo $a=$_REQUEST['hotelname'];
// Loop through the query results, outputing the options one by one
	echo "<option>Name_of_Agency</option>";
while( $row = mysql_fetch_array( $r )) 
{
   echo "<option value='".$row['Name_of_Agency']."'>".$row['Name_of_Agency']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "<br>";
	//echo "The total hotels on your selected State are=$i";

?>

</form>



</body>
</html>
