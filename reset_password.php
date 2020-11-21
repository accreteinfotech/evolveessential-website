<?php
	ob_start();
?>
<?php
    include 'backyard/include/connect.php';
    $cmail=$_REQUEST['cmail'];
    $newpass=md5($_REQUEST['newpass']);
    
    $link->where("user_email",$cmail);
    $sql=$link->update("user",array("user_password"=>$newpass));
    if($sql)
    {
        header("location:send.php?sid=4");
    }
?>