<html>

<head>

   
</head>


<body>

<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=tanu', 'root', '');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT STATE 
  FROM `hotelinfo`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    






<form action="l3.php" method="post">

	<select name="STATE" id="STATE" class="update">
        <option value="">Select State</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['STATE']; ?>">
                    <?php echo $row['STATE']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	

	<select name="DISTRICT" id="DISTRICT" class="update">
	    <option value="">Select District</option>
	</select>


    <select name="TYPE" id="TYPE">
        <option value="Heritage Basic"> Heritage Basic </option>
        <option value="Heritage Classic"> Heritage Classic </option>
        <option value="Heritage Grand"> Heritage Grand </option>
        <option value="4 Star"> 4 Star </option>
        <option value="5 Star"> 5 Star </option>
        <option value="5 Star Deluxe"> 5 Star Deluxe </option>

    </select>
<input type="submit" name="submitButton" value="Submit me!" />
</form>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
<script src="ajax.js" type="text/javascript"></script>
  
</body>
</html>
