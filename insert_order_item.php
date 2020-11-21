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
	
	for($i=0;$i<count($_POST['cart_id']);$i++)
	{
			$cart_id=$_POST['cart_id'][$i];
			$product_id=$_REQUEST['product_id'][$i];
			$light_flow=$_REQUEST['light_flow'][$i];
			$heavy_flow=$_REQUEST['heavy_flow'][$i];
			$price=$_REQUEST['price'][$i];
			
				
			$sql2=$link->rawQueryOne("select * from order_item where cart_id=? and order_product_id=0",array($cart_id));
			if($link->count > 0)
			{
					header("location:Checkout");
			}
			else
			{
				$sql=$link->insert("order_item",array("cart_id"=>$cart_id,"user_id"=>$uid,"product_id"=>$product_id,"light_flow"=>$light_flow,"heavy_flow"=>$heavy_flow,"price"=>$price));
				if($sql)
				{
					header("location:Checkout");
				}
					
			}
			
	}
	
	
	

	
	
	
?>