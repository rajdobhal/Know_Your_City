<?php
include('connection.php');
echo $s=$_REQUEST['STATE'];
echo $d=$_REQUEST['DISTRICT'];
echo $r=$_REQUEST['TYPE'];
$sql=mysql_query("INSERT INTO prefer(STATE , District) VALUES ('$s', '$d')") ;


$data=mysql_query("SELECT `HOTEL_NAME` 
            FROM `hotelinfo`
            WHERE `TYPE`='$r' AND `STATE`='$s' AND `DISTRICT`='$d'");

?>

<html>



<head>
<script>

function disp(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","process2.php?q="+str,true);
xmlhttp.send();
}

</script>
<script>


function disp1(str)
{
 // var v=<?php echo $s;?>
var xmlhttp;    
if (str=="")
  {
  document.getElementById("in").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("in").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","process.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>


function tour(str)
{


var xmlhttp;    
if (str=="")
  {
  document.getElementById("jj").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("jj").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","process3.php?q="+str,true);
xmlhttp.send();



}
</script>



</head>






<body>
<form action="" method="POST">

<?php

if((mysql_num_rows($data))>0)
{
	echo "<select name=\"hotelname\" onchange=\"disp(this.value)\">"; // Open your drop down box
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
}

else
{
	echo "no hotel of this type in state";
	echo "select another type";

	
}
?>
<!--<input type="submit" value="submit">-->
</form>
<div id="txtHint">Customer info will be listed here...</div>









<form method="POST" action="">
<select name = "type" onchange="disp1(this.value)">
<option value=""> Select Type of tour operator </option>
<option value ="Adventure Tour Operator"> Adventure Tour Operator </option>
<option value ="Domestic Tour Operator"> Domestic Tour Operator </option>
<option value ="Inbound Tour Operator"> Inbound Tour Operator </option>
<option value ="Travel Agent"> Travel Agent </option>
<option value ="Tourist Transport Operator"> Tourist Transport Operator </option>
</select>
<!--<input type="submit" name="submitButton" value="Submit me" />-->
</form>

<div id="in">Customer info will be listed here...</div>






<div id="jj">Customer info will be listed here...</div>
</body>
</html>
 
