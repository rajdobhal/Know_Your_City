<?php
include('connection.php');
$t1=mysql_fetch_array(mysql_query("SELECT `Total Cognizable Crimes - Male` FROM `crimerate` WHERE State='Delhi'"));
$t2=mysql_fetch_array(mysql_query("SELECT `Total Cognizable Crimes - Female` FROM `crimerate` WHERE State='Delhi'"));
$t3=mysql_fetch_array(mysql_query("SELECT `Murder - Male` FROM `crimerate`  WHERE State='Delhi'"));


echo $t1[0];
echo $t2[0];
echo $t3[0];



?>
<script>
var v1=<?php echo $t1[0];?> 
var v2=<?php echo $t2[0];?> 
var v3=<?php echo $t3[0];?> 
document.write("hello");
document.write(v1);
document.write(v2);
document.write(v3);

</script>

