<?php
	ob_start();
?>
<?php
session_start();
include 'backyard/include/connect.php';
$user_id=$_SESSION['user_id'];
$current_password = md5($_POST['current_password']);
$new_password = md5($_POST['new_password']);
$c_password = md5($_POST['c_password']);

	$sql = $link->rawQueryOne("select * from user where user_id=? and user_password=?",Array($user_id,$current_password));
	if($link->count > 0)
	{
		$link->where("user_id",$user_id);
		$ab=$link->update("user",array("user_password"=>$c_password));
		if($ab)
		{
			session_destroy();
			echo "success";
		}
	}
	else
	{
		echo "err";
	}
	?>