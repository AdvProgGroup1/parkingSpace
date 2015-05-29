<html>

	<head>
	<title>Retrieve data from database </title>
	<link rel="stylesheet" type="text/css" href="test.css">
	</head>
	<body>

	<?php
	// Connect to database server
	
	//mysql_connect("localhost", "root", "") or die (mysql_error ());

	// Select database
	//mysql_select_db("parkingarea") or die(mysql_error());
	
	//$user = 'root';
	//$pass = '';
	//$dabas = 'parkingarea';
	
	//$db = new mysqli('localhost', $user, $pass, $dabas) or die("Unable to connect");
	
	//echo"abc";
	
	// Connecting, selecting database
	$link = mysql_connect('localhost', 'root', '')
		or die('Could not connect: ' . mysql_error());
	//echo 'Connected successfully';
	mysql_select_db('parkingarea') or die('Could not select database');
	
	// SQL query
	//$query = "SELECT * FROM parkingSpace WHERE STATUS = '1'";
	$IDbook = $_POST["abc"];
	//$Orang = $_POST["def"];
	//echo $Orang;
	
	//$strSQL = "Update parkingSpace set "; 
	//$strSQL = $strSQL . "STATUS= '1', "; 
	//$strSQL = $strSQL . "BOOKER= $Orang "; 

	//$strSQL = $strSQL . "WHERE ID = $IDbook"; 
	
	$query = "UPDATE parkingSpace SET BOOKER = 'abc', STATUS = '1'  WHERE ID = $IDbook";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	//echo "change successfully";
	// Execute the query (the recordset $rs contains the result)
	//$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	echo "<table>\n";
	//while($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	//	echo "\t<tr>\n";
	//	foreach ($line as$col_value){
	//		echo"\t\t<td>$col_value</td>\n";
	//	}
	//	echo "\t</tr>\n";
	//}
	echo "</table>\n";
	   // Write the value of the column FirstName (which is now in the array $row)
	  //echo $row['FirstName'] . "<br />";

	  

	// Close the database connection
	mysql_close($link);
	?>
	</body>
	
	<form id="msform">
	<fieldset>
		<h2 class="fs-title">Thank You for Your Booking</h2>
		<h3 class="fs-title">Your Booking has been proceed to the database</h3>
		<a href="tezt.html">
			<input type="button" value="Home" class="next action-button"/>
		</a>
	 </fieldset>
</form>
	
	</html>