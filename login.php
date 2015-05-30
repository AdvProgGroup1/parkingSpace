<?php
session_start();

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
$user = fgets($myfile);


if($_REQUEST['username']== 'group1' && $_REQUEST['password']=='12345')
{
$_SESSION['username'] = 'group1';
$_SESSION['password'] = '12345';
$_SESSION['attempt'] = "1";
$username = $_SESSION['username'];
header("Location: member.php");
}
else
{
$_SESSION['wrong'] = '<p style="color:red">Sorry, incorrect Username or Password</p>';
header("Location: tezt.php");
}

fclose($myfile);
?>