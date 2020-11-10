<?php
    ob_start();
?>
<!doctype html>
<script src="js/jquery-3.2.1.min.js"></script>
<html lang="en">
    <body>
        
<!--<a href="img/Infiniqe&didotProfile.pdf" download> <button type="button" id="downloadbtn">Download</button></a>

<script>
$( document ).ready(function() {
    //jQuery('#downloadbtn').click();
    
  $( "#downloadbtn" ).click();
});
</script>-->
</body>
</html>
<?php

include 'backyard/include/connect.php';

$contact_name=$_POST['contact_name'];
$contact_email=$_POST['contact_email'];
$contact_phone=$_POST['contact_phone'];
$contact_website=$_POST['contact_website'];
$contact_des=$_POST['contact_des'];
	$sql=$link->insert("contact",array("contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_website"=>$contact_website,"contact_phone"=>$contact_phone,"contact_des"=>$contact_des));
	if($sql)


		require_once "backyard/phpmailer/class.phpmailer.php";

			try {
			   
						//$lastID = $DB->lastInsertId();

				   $message = "<html>
						<head>
						<style>
						.imgclass
						{
							height:20px;
							width:20px;
							vertical-align:bottom;
						}

						</style>
						</head>
									<body style='background-color:#f3f3f3;padding:50px;'>
									<img src='images/logo.png' height='100px' width='100px' alt='Infiniqe Marketing'/>
										<h4>Your Contact Details:</h4></br>";
									    	 $message .= '<h3>Contact Name ' . $contact_name . '!</h1>';
                                           $message .= '<h4>Email :- ' . $contact_email . '</h2>';
                                           $message .= '<h4>Phone-no :- ' . $contact_phone . '</h2>';
                                           $message .= '<h4>Content :- ' . $contact_message . '</h2>';
				                    	$message .= "<p>Connect with us on social media: 
											<a href='https://www.facebook.com/infiniqemarketing/'><img src='https://www.infiniqemarketing.com/admin/images/facebook.png' class='imgclass' height='20px' width='20px' style='vertical-align:bottom;height:20px;width:20px;'/></a>&nbsp;&nbsp;
											<a href='https://www.instagram.com/infiniqemarketing/'><img src='https://www.infiniqemarketing.com/admin/images/instagram.png' class='imgclass' height='20px' width='20px' style='vertical-align:bottom;height:20px;width:20px;'/></a>&nbsp;&nbsp; 
											<a href='https://www.youtube.com/channel/UCzzHG6IoDTy9XYEsg_EBLaw'><img src='https://www.infiniqemarketing.com/admin/images/youtube.png' class='imgclass' height='20px' width='20px' style='vertical-align:bottom;height:20px;width:20px;'/></a>
										</p></br>
				
					
				</body>
			</html>";
					

					// php mailer code starts
				   $mail = new PHPMailer(true);
					$mail->IsSMTP(); // telling the class to use SMTP

					$mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
					$mail->SMTPAuth = false;                  // enable SMTP authentication
					$mail->SMTPSecure = false;                 // sets the prefix to the servier
					$mail->Host = $host_name;      // sets GMAIL as the SMTP server
					$mail->Port = $port;                   // set the SMTP port for the GMAIL server
						// set the SMTP port for the GMAIL server

					$mail->Username = $email_username;
					$mail->Password = $email_password;

					$mail->SetFrom($email_username, $team_name);
					$mail->AddAddress('chauhandinal2018@gmail.com');
					$mail->AddAddress('support@infiniqemarketing.com');

					$mail->Subject = trim("Contact Inquiry");
					$mail->MsgHTML($message);

					try {
					  $mail->send();
					  $msg = "An email has been sent.";
					  $msgType = "success";
					  echo "send";
					  header("location:Contact-Us");
					  //header('location:index.php?sid=2');
					} catch (Exception $ex) {
					  $msg = $ex->getMessage();
					  $msgType = "warning";
					}
				
				}
				 catch (Exception $ex) {
				echo $ex->getMessage();
			  }
		
  ?>
  <?php 

	

	if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p>
	<?php 
			echo $msg;
	// header('location:index.php?sid=2');
	header("location:Contact-Us");
	?></p>
  </div>
<?php }
?>