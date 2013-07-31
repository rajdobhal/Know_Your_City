<?php
 session_start();
 $t=$_REQUEST["q"];
$_SESSION['district'] = $t;

?>


 <html>

 <body>

<form action="" method="POST">

 <select name="TYPE" id="TYPE" onchange="disp1(this.value)">
 	    <option value=""> SELECT TYPE </option>
        <option value="Heritage Basic"> Heritage Basic </option>
        <option value="Heritage Classic"> Heritage Classic </option>
        <option value="Heritage Grand"> Heritage Grand </option>
        <option value="4 Star"> 4 Star </option>
        <option value="5 Star"> 5 Star </option>
        <option value="5 Star Deluxe"> 5 Star Deluxe </option>

    </select>
</form>
<div id="type"></div>
</body>
</html>