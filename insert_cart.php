<?php
	ob_start();
	session_start();
	include 'backyard/include/connect.php';
	if(isset($_SESSION['user_id']) && isset($_SESSION['user_id'])!=null)
    {
        $uid=$_SESSION['user_id'];
    }
    else
    {
        $uid=session_id();
    }
	
	$product_id=$_REQUEST['product_id'];
	$light_flow=$_REQUEST['light_flow'];
	$heavy_flow=$_REQUEST['heavy_flow'];
	$price=$_REQUEST['price'];
	
	$sql=$link->insert("cart",array("user_id"=>$uid,"product_id"=>$product_id,"light_flow"=>$light_flow,"heavy_flow"=>$heavy_flow,"price"=>$price));
	if($sql)
	{
		header("location:Cart");
	}
	else
	{
		$product=$link->rawQueryOne("select * from product where product_id=?",array($product_id));
		if($link->count > 0)
		{
			$product_alias=$product['product_alias'];
		}
		header("location:Product/".$product_alias);
	}
?>