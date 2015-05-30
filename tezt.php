<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="test.css">
  
</head>
<body>

<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
header("Location: member.php");
}

?>


<form class='login' id='login' action='login.php' method='post' accept-charset='UTF-8' >
<fieldset>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='username' >Username:<br/></label><input type='text' name='username' id='username'  maxlength="20"/><br/>
<br/>
<label for='password' >Password:<br/></label><input type='password' name='password' id='password' maxlength="20"/>
<br/>
<br/>
<input type='submit' name='Submit' value='Login' class="styled-button-9"/>

<?php
//session_start();
if(isset($_SESSION['wrong']))
{
echo($_SESSION['wrong']);
session_destroy();
}
//
?>
 </fieldset>
</form>  


</body>
</html>