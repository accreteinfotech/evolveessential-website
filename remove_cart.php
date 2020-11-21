<?php
	include 'backyard/include/connect.php';
	session_start();
	
	$cid=$_GET['cid'];
		$check=$link->rawQuery("select * from order_item where cart_id=?",array($cid));
		if($link->count > 0)
		{
			$link->where("cart_id",$cid);
			$sql4=$link->delete("order_item");
			if($sql4)
			{
				$link->where("cart_id",$cid);
				$sql2=$link->delete("cart");
				if($sql2)
				{
					echo "";
				}
				else
				{
					echo "Something Wrong";
				}
			}
			else
			{
				echo "err";
			}
		}
		else
		{
			$link->where("cart_id",$cid);
			$sql2=$link->delete("cart");
			if($sql2)
			{
				echo "";
			}
			else
			{
				echo "Something Wrong";
			}
		}
?>