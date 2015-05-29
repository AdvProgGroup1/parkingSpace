<?php

session_start();

	function notify($type ='neutral', $message = "The slot are available")
{
	
	$_SESSION['notify']['type'] = $type;
	$_SESSION['notify']['message'] = $message;
	
	
	
}

function notification()
{
	
	//Print notification set with notify()
	if(isset($_SESSION['notify']))
	{

		$type = S_SESSION['notify']['type'];
		$message = S_SESSION['notify']['message'];
		
		$notification = unserialize($_SESSION['notification']);
		extract($notification);
		
		$html = '<div class="notify '.$type.'">'.$message.'</div>';
		
		echo $html;
		
		unset($_SESSION['notify']);
		
	}
		
}



?>

//notify();,<?phpnotification();?>