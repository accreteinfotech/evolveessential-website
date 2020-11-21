<?php
	ob_start();
	include 'backyard/include/connect.php';
	$mybirthdate= $_REQUEST['user_dob'];
	
		# object oriented
	$from = new DateTime($mybirthdate);
	$to   = new DateTime('today');
	echo $from->diff($to)->y;

	# procedural
	//echo date_diff(date_create('1999-05-19'), date_create('today'))->y;
?>
