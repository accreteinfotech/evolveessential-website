<?php
	ob_start();
?>
<?php
include 'backyard/include/connect.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);


	$sql = $link->rawQueryOne("select * from user where (user_email = ? OR user_phone = ?) and user_password = ?",Array($username,$username,$password));
	if($link->count > 0)
	{
		$_SESSION['user_id'] = $sql['user_id'];
		$_SESSION['user_full_name'] = $sql['user_full_name'];
		
		    $session_id=session_id();
		    echo "success";
			//$cart=$link->rawQuery("select * from cart where user_id=? and order_id=0",array($session_id));
			/*if($link->count > 0)
			{
			    $link->where("user_id",$session_id);
			    $up=$link->update("cart",array("user_id"=>$sql['user_id']));
			    if($up)
			    {
					if(isset($_POST['cart_id'] ) && $_POST['cart_id']!=null)
					{
						echo "checkout";
					}
					else
					{
						echo "";
					}
			        $item=$link->rawQuery("select * from order_item where user_id=? and order_product_id=0",array($session_id));
			        {
			            $link->where("user_id",$session_id);
			            $up2=$link->update("order_item",array("user_id"=>$sql['user_id']));
			           if(isset($_POST['cart_id']) && $_POST['cart_id']!=null)
						{
							echo "checkout";
						}
						else
						{
							echo "";
						}
			        }
			    }
			}
			else
			{
			    echo "success";
			}*/
		//header('location:dashboard/index.php');
		/*if(isset($_POST['pid']) && $_POST['pid']!=null)
		{
				echo "1";
			
		}*/
	
	}
	elseif($password==null || $username==null)
	{
		echo "Username or Password is Blank !!";
	}
	else 
	{
		echo "Invalid Username Or Password !!";
	}
	if(!empty($_POST['remember']))
{
	setcookie('user',$username,time() + (365 * 24 * 60 * 60));
	setcookie('pwd',$_POST['password'],time() + (365 * 24 * 60 * 60));
}
else
{
	setcookie('user','');
	setcookie('pwd','');
}
?>