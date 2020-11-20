<?php
	include 'backyard/include/connect.php';
	session_start();
	
	$user_email=$_REQUEST['user_email'];
	
	$sql=$link->rawQueryOne("select * from user where user_email=?",array($user_email));
	if($link->count == 0)
	{
		echo "new";
	}
	else
	{
		echo "already";
	}
?>