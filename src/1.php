<html>
<body>





<head>

  <script type="text/javascript">

function disp(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("district").innerHTML="";
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
    document.getElementById("district").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","type.php?q="+str,true);
xmlhttp.send();
}

  </script>













  <script>


function disp3(str)
{
 // var v=<?php echo $s;?>
var xmlhttp;    
if (str=="")
  {
  document.getElementById("hotel").innerHTML="";
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
    document.getElementById("hotel").innerHTML=xmlhttp.responseText;
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
  document.getElementById("type").innerHTML="";
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
    document.getElementById("type").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","hotel.php?q="+str,true);
xmlhttp.send();
}
</script>






</head>










<?php
  session_start();
echo $x = $_SESSION['state'];
include('connection.php');


try {
$objDb = new PDO('mysql:host=localhost;dbname=tanu', 'root', '');
 $objDb->exec('SET CHARACTER SET utf8');
  
$data="SELECT DISTINCT DISTRICT FROM hotelinfo WHERE DISTRICT='$x'";
	// echo "Your Correspondence Hotels are given below<br>";
	//$info=mysql_fetch_array($data))

 $statement = $objDb->query($data);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  catch(PDOException $e) {
 echo 'There was a problem';
 }

?>

<form action="" method="post">

	<select name="DISTRICT" id="DISTRICT" class="update" onchange=disp(this.value)>
        <option value="">Select DISTRICT</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['DISTRICT']; ?>">
                    <?php echo $row['DISTRICT']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	
<input type="submit" value="submit">
</form>
<div id="district"></div>
</body>
</html>