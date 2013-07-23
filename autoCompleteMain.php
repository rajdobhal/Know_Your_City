<?php
include "connection.php";
$q = strtoupper($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT HOTEL_NAME  as hotel from `hotelinfo` where HOTEL_NAME LIKE '%$q%'";
//$sql2 = "select DISTINCT district as district from `hotelinfo` where district LIKE '%$q%'";

$st = mysql_query($sql);
//$dist = mysql_query($sql2);

if($st)
{while($rs = mysql_fetch_array($st)) {
	$cname = $rs['hotel'];
	echo "$cname\n";}
}
//if($dist)
//{while($rs = mysql_fetch_array($dist))
  // {$cname = $rs['district'];
	//echo "$cname\n";}

?>