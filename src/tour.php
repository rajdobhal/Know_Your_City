<?php
 session_start();
 $t=$_REQUEST["q"];
$_SESSION['district'] = $t;

?>


 <html>

 <body>

<form action="" method="POST">

 <select name="TYPE" id="TYPE" onchange="disp1(this.value)">
<option value=""> Select Type of tour operator </option>
<option value ="Adventure Tour Operator"> Adventure Tour Operator </option>
<option value ="Domestic Tour Operator"> Domestic Tour Operator </option>
<option value ="Inbound Tour Operator"> Inbound Tour Operator </option>
<option value ="Travel Agent"> Travel Agent </option>
<option value ="Tourist Transport Operator"> Tourist Transport Operator </option>
</select>
<!--<input type="submit" name="submitButton" value="Submit me" />-->
</form>

		
		
		<div id="type"></div>
</body>
</html>