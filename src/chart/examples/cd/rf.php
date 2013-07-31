<?php
include "connection.php";


$s=$_SESSION['state'];
$d=$_SESSION['demo'];


$t1=mysql_fetch_array(mysql_query("SELECT `JAN` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t2=mysql_fetch_array(mysql_query("SELECT `FEB` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t3=mysql_fetch_array(mysql_query("SELECT `MAR` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t4=mysql_fetch_array(mysql_query("SELECT `APR` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t5=mysql_fetch_array(mysql_query("SELECT `MAY` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t6=mysql_fetch_array(mysql_query("SELECT `JUN` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t7=mysql_fetch_array(mysql_query("SELECT `JUL` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t8=mysql_fetch_array(mysql_query("SELECT `AUG` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$t9=mysql_fetch_array(mysql_query("SELECT `SEP` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$r1=mysql_fetch_array(mysql_query("SELECT `OCT` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$r2=mysql_fetch_array(mysql_query("SELECT `NOV` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
$r3=mysql_fetch_array(mysql_query("SELECT `DEC` FROM `climate` WHERE STATE='$s' AND DISTRICT='$d'"));
//echo $r3[0];

?>













        <script>
		
		
        //alert("hello");		
		
		var v1=<?php echo $t1[0];?>;
 var v2=<?php echo $t2[0];?>;
 var v3=<?php echo $t3[0];?>;
 var v4=<?php echo $t4[0];?>;
 var v5=<?php echo $t5[0];?>;
 
 var v6=<?php echo $t6[0];?>;
 var v7=<?php echo $t7[0];?>;
 var v8=<?php echo $t8[0];?>;
 var v9=<?php echo $t9[0];?>;
 var x1=<?php echo $r1[0];?>;
 var x2=<?php echo $r2[0];?>;
 var x3=<?php echo $r3[0];?>;
 // var x4=<?php echo $s;?>;
//alert(x3);
 </script>










