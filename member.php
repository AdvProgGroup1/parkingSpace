<head>
<?php
session_start();

$nAttempt = $_SESSION['attempt'];
$session = 0;


?>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="<?= $refresh ?>">  
	<link rel="stylesheet" type="text/css" href="test.css">
</head>


<body>


</h1>

<?php

if(!isset($_SESSION['username']) || !isset($_SESSION['password']))
{header("Location: tezt.php");}

?>

<form action="logout.php" align="center">
Authentication Succeed<br/>
<br/>
Welcome,
<?php echo $_SESSION['username'];
?>

<br/>    
<br/>
<a href="tezt2.html">Continue</a>
<br/>
<br/>
<input type="submit" value="Logout" class="styled-button-9">
<br/>



</form>



</body>