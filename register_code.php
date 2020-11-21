<?php
   include 'backyard/include/connect.php';
   
	$user_full_name=$_POST['user_full_name'];
	$user_address=$_POST['user_address'];
	$user_dob = $_POST['user_dob'];
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
	
	$from = new DateTime($user_dob);
	$to   = new DateTime('today');
	$user_age =  $from->diff($to)->y;
	
	$sql=$link->insert("user",array("user_full_name"=>$user_full_name,"user_company"=>$user_company,"user_phone"=>$user_phone,"user_dob"=>$user_dob,"user_age"=>$user_age,"user_country"=>$user_country,"user_state"=>$user_state,"user_city"=>$user_city,"user_pincode"=>$user_pincode,"user_add1"=>$user_add1,"user_add2"=>$user_add2,"user_email"=>$user_email,"user_password"=>$user_password));	
		if ($sql) 
		 {
			 
			session_start();
			$_SESSION['user_id'] = $sql;
			$_SESSION['user_full_name'] = $user_full_name;
			
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
									<img src='assets/images/logo-white.png' height='100px' width='100px' alt='$project_name'/>
										<h4>Thank You For Register With us.</h4></br>
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
					$mail->AddAddress($user_email);

					$mail->Subject = trim("Welcome To Evolve Essential");
					$mail->MsgHTML($message);

					try {
					  $mail->send();
					  $msg = "An email has been sent.";
					  $msgType = "success";
					  echo "send";
					  header("location:Home");
					  //header('location:index.php?sid=2');
					} catch (Exception $ex) {
					  $msg = $ex->getMessage();
					  $msgType = "warning";
					}
				
				}
				 catch (Exception $ex) {
				echo $ex->getMessage();
			  }
		
			header('location:Home');
		 } 
?>