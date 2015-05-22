<html>
	<head>
	<title>Retrieve data from database </title>
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
	echo 'Connected successfully';
	mysql_select_db('parkingarea') or die('Could not select database');
	
	// SQL query
	$query = "SELECT * FROM parkingSpace";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());

	// Execute the query (the recordset $rs contains the result)
	//$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	echo "<table>\n";
	while($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as$col_value){
			echo"\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	   // Write the value of the column FirstName (which is now in the array $row)
	  //echo $row['FirstName'] . "<br />";

	  

	// Close the database connection
	mysql_close($link);
	?>
	</body>
	</html>