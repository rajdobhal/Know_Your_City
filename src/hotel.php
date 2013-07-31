<html>
<?php
include 'connection.php';
session_start();
$s=$_SESSION['state'];
$t=$_SESSION['district'];
$d=$_REQUEST["q"];
$data=mysql_query("SELECT HOTEL_NAME FROM hotelinfo WHERE TYPE='$d' AND `STATE`='$s' AND `DISTRICT`='$t'");

?>
<form action="" method="POST">



<?php
echo '<center>';
//if(mysql_num_rows($data)>0)
//{
	echo "<select name=\"hotelname\" onchange=\"disp3(this.value)\">"; // Open your drop down box
      //  echo $a=$_REQUEST['hotelname'];
// Loop through the query results, outputing the options one by one
	echo "<option>select hotel</option>";
while( $row = mysql_fetch_array( $data )) 
{
   echo "<option value='".$row['HOTEL_NAME']."'>".$row['HOTEL_NAME']."</option>";
}

echo "</select>";// Close your drop down box

		
echo "<br>";


	//echo "The total hotels on your selected State are=$i";


//else
//{
	//echo "no hotel of this type in state";
	//echo "select another type";

	
//}
?>
</form>
<div id="hotel"></div>
</html>

<!--<input type="submit" value="submit">-->
