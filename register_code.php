<?php
   include 'backyard/include/connect.php';
   
	$user_full_name=$_POST['user_full_name'];
	$user_address=$_POST['user_address'];
	$user_phone=$_POST['user_phone'];
	$user_company = $_POST['user_company'];
	$user_country = $_POST['user_country'];
	$user_state = $_POST['user_state'];
	$user_city = $_POST['user_city'];
	$user_pincode = $_POST['user_pincode'];
	$user_add1 = $_POST['user_add1'];
	$user_add2 = $_POST['user_add2'];
	$user_email=$_POST['user_email'];
	$user_password=md5($_POST['user_password']);
	
	$sql=$link->insert("user",array("user_full_name"=>$user_full_name,"user_company"=>$user_company,"user_phone"=>$user_phone,"user_country"=>$user_country,"user_state"=>$user_state,"user_city"=>$user_city,"user_pincode"=>$user_pincode,"user_add1"=>$user_add1,"user_add2"=>$user_add2,"user_email"=>$user_email,"user_password"=>$user_password));	
		if ($sql) 
		 {
			session_start();
			$_SESSION['user_id'] = $sql;
			$_SESSION['user_full_name'] = $user_full_name;
			header('location:Home');
	     } 
?>