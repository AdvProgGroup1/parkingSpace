<?php
session_start();
$username = $_SESSION['username'];
$out = $_SESSION['out'];
session_destroy();

header("Location: tezt.php");
exit();
?>