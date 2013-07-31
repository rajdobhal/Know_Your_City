<?php
include('connection.php');


session_start();
$s=$_SESSION['state'];


$t1=mysql_fetch_array(mysql_query("SELECT `Total Cognizable Crimes - Male` FROM `crimerate` WHERE State='$s'"));
$t2=mysql_fetch_array(mysql_query("SELECT `Total Cognizable Crimes - Female` FROM `crimerate` WHERE State='$s'"));
$t3=mysql_fetch_array(mysql_query("SELECT `Murder - Male` FROM `crimerate` WHERE State='$s'"));
$t4=mysql_fetch_array(mysql_query("SELECT `Murder - Female` FROM `crimerate` WHERE State='$s'"));
$t5=mysql_fetch_array(mysql_query("SELECT `Culpable Homocide not amounting to murder - Male` FROM `crimerate` WHERE State='$s'"));
$t6=mysql_fetch_array(mysql_query("SELECT `Culpable Homocide not amounting to murder - Female` FROM `crimerate` WHERE State='$s'"));
$t7=mysql_fetch_array(mysql_query("SELECT `Rape - Male` FROM `crimerate` WHERE State='$s'"));
$t8=mysql_fetch_array(mysql_query("SELECT `Rape - Female` FROM `crimerate` WHERE State='$s'"));
$t9=mysql_fetch_array(mysql_query("SELECT `Kidnapping and Abduction - Male` FROM `crimerate` WHERE State='$s'"));
$r1=mysql_fetch_array(mysql_query("SELECT `Kidnapping and Abduction - Female` FROM `crimerate` WHERE State='$s'"));
$r2=mysql_fetch_array(mysql_query("SELECT `Dacoity - Male` FROM `crimerate` WHERE State='$s'"));
$r3=mysql_fetch_array(mysql_query("SELECT `Dacoity - Female` FROM `crimerate` WHERE State='$s'"));
$r4=mysql_fetch_array(mysql_query("SELECT `Robbery - Male` FROM `crimerate` WHERE State='$s'"));
$r5=mysql_fetch_array(mysql_query("SELECT `Robbery - Female` FROM `crimerate` WHERE State='$s'"));
$r6=mysql_fetch_array(mysql_query("SELECT `Burglary - Male` FROM `crimerate` WHERE State='$s'"));
$r7=mysql_fetch_array(mysql_query("SELECT `Burglary - Female` FROM `crimerate` WHERE State='$s'"));
$r8=mysql_fetch_array(mysql_query("SELECT `Theft - Male` FROM `crimerate` WHERE State='$s'"));
$r9=mysql_fetch_array(mysql_query("SELECT `Theft - Female` FROM `crimerate` WHERE State='$s'"));
$a1=mysql_fetch_array(mysql_query("SELECT `Riots - Male` FROM `crimerate` WHERE State='$s'"));
$a2=mysql_fetch_array(mysql_query("SELECT `Riots - Female` FROM `crimerate` WHERE State='$s'"));
$a3=mysql_fetch_array(mysql_query("SELECT `Criminal Breach of Trust - Male` FROM `crimerate` WHERE State='$s'"));
$a4=mysql_fetch_array(mysql_query("SELECT `Criminal Breach of Trust - Female` FROM `crimerate` WHERE State='$s'"));
$a5=mysql_fetch_array(mysql_query("SELECT `Cheating - Male` FROM `crimerate` WHERE State='$s'"));
$a6=mysql_fetch_array(mysql_query("SELECT `Cheating - Female` FROM `crimerate` WHERE State='$s'"));
$a7=mysql_fetch_array(mysql_query("SELECT `Counterfeiting - Male` FROM `crimerate` WHERE State='$s'"));
$a8=mysql_fetch_array(mysql_query("SELECT `Counterfeiting - Female` FROM `crimerate` WHERE State='$s'"));
//$t=mysql_fetch_array($8);
//echo $a8[0];
?>
<script>

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
 var x4=<?php echo $r4[0];?>;
 var x5=<?php echo $r5[0];?>;
 var x6=<?php echo $r6[0];?>;
 var x7=<?php echo $r7[0];?>;
 var x8=<?php echo $r8[0];?>;
 var x9=<?php echo $r9[0];?>;
 var y1=<?php echo $a1[0];?>;
 var y2=<?php echo $a2[0];?>;
 var y3=<?php echo $a3[0];?>;
 var y4=<?php echo $a4[0];?>;
 var y5=<?php echo $a5[0];?>;
 var y6=<?php echo $a6[0];?>;
 var y7=<?php echo $a7[0];?>;
 var y8=<?php echo $a8[0];?>;
//alert("hello" + y8);
</script>

