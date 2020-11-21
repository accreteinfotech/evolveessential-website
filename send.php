<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include 'backyard/include/connect.php';
	session_start();
	if(isset($_GET['sid']) && $_GET['sid']==1)
	{
		$title="Register Successful";
		$msg="Thank You For Register Now Your Can Login";
	}
	if(isset($_GET['sid']) && $_GET['sid']==2)
	{
		$title="Order Successful";
		$msg="Thank You For Order You Well Get Mail Soon";
	}
	if(isset($_GET['sid']) && $_GET['sid']==5)
	{
		$title="Quote Request Successful";
		$msg="Thank You For Request You Well Get Mail Soon";
	}
	if(isset($_GET['sid']) && $_GET['sid']==6)
	{
		$title="Quote Request Successful";
		$msg="Thank You For Quote Request You Well Get Mail Soon";
	}
	if(isset($_GET['sid']) && $_GET['sid']==3)
	{
		$title="FAQ Successful";
		$msg="Your Report Is Being Processed And Will Be Sent You Shortly";
	}
	if(isset($_GET['sid']) && $_GET['sid']==4)
	{
		$title="Password Reset Successful";
		$msg="Your Account Password Change Successfully";
		session_destroy();
	}
	if(isset($_GET['sid']) && $_GET['sid']==7)
	{
		$title="Password Change Successful";
		$msg="Please login with your new password";
	}
?> 
	<title><?php echo $project_name; ?> | <?php echo $title; ?></title>
	<base href="<?php echo $site_url; ?>">
   <?php
		include 'head_code.php';
	?>
    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    
	 <style>
    .mybtn
    {
        background-color: #94226d;
        color: #ffffff;
        font-size:15px;
        padding: 8px 22px;
        display: inline-block;
        margin-top: 15px;
        margin-bottom: 15px;
        border-radius: 20px;
    }
    a:hover
    {
        color:#fff;
    }
    </style>
</head>
<body>
<?php 
$current_page = "Success";
include('header.php');
?>

<section class="services-page pt-100 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="services-title text-center">
                        <h3 style="padding: 120px 0px; margin-bottom: 0px;"> <?php echo $msg; ?></h3>
						<img style="margin-left:auto;margin-right:auto;padding-top:0px;margin-top:0px;display:block;height:80%" src="assets/images/send.gif">
						<?php
						if(isset($_GET['sid']) && $_GET['sid']==1 || isset($_GET['sid']) && $_GET['sid']==4 || isset($_GET['sid']) && $_GET['sid']==7)
						{
							?>
							<div class="btn-wrapper">
                                <a href="Login-Register" style="width:30%;" class="main-btn btn-block">Click Here For Login</a>
                            </div>
						
							<?php
						}
						else if(isset($_GET['sid']) && $_GET['sid']==5)
						{
							header("location:../Wishlist");
						}
						?>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php 
include('footer.php');
?>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/chosen.min.js"></script>
<script src="assets/js/countdown.min.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/jquery.zoom.min.js"></script>
<script src="assets/js/threesixty.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/mobilemenu.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/accrete.js"></script>
</body>
</html>