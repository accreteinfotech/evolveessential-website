<?php
    ob_start();
?>
<?php
	include 'backyard/include/connect.php';
	session_start();
	if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
        $uid=$_SESSION['user_id'];
    }
    else
    {
        $uid=session_id();
    }
	$full_name=$_POST['full_name'];
	//address field change
	$order_country = $_POST['order_country'];
	$order_state = $_POST['order_state'];
	$order_city = $_POST['order_city'];
	$order_pincode = $_POST['order_pincode'];
	$order_add1 = $_POST['order_add1'];
	$order_add2 = $_POST['order_add2'];
	$coupon_id = 0;

	//$order_address=$_POST['order_address'];
	$order_phone=$_POST['order_phone'];
	$order_mail=$_POST['order_mail'];
	//$state_name=$_POST['state_name'];
	//$city_name=$_POST['city_name'];
	//$order_postal_code=$_POST['order_postal_code'];
	$order_total=$_POST['order_total'];
	$order_comments=$_POST['order_comments'];
	$radio=$_POST['payment'];
	$product_name=implode(', ', $_POST['product_name']);
	if($radio=="cash")
	{
		$sql=$link->insert("order_product",array("coupon_id"=>$coupon_id,"order_comments"=>$order_comments,"order_country"=>$order_country,"order_product_type"=>$radio,"order_total"=>$order_total,"order_state"=>$order_state,"order_city"=>$order_city,"order_pincode"=>$order_pincode,"user_id"=>$uid,"full_name"=>$full_name,"order_mail"=>$order_mail,"order_add1"=>$order_add1,"order_add2"=>$order_add2, "order_phone"=>$order_phone,"is_active"=>1));
		$leads=$link->insert("leads",array("leads_product"=>$product_name,"leads_country_name"=>$order_country,"leads_total"=>$order_total,"leads_state_name"=>$order_state,"leads_city_name"=>$order_city,"leads_postal_code"=>$order_pincode,"leads_name"=>$full_name,"leads_mail"=>$order_mail,"leads_address"=>$order_add1,"leads_phone"=>$order_phone));
		
		if($sql)
		{
			
			for($i=0;$i < count($_POST['cart_id']);$i++)
			{
				$cart_id2=$_POST['cart_id2'][$i];
				$cart_id=$_POST['cart_id'][$i];
				$product_id=$_POST['product_id'][$i];
				$product_total_qty=$_POST['product_total_qty'][$i];
				
				$link->where("order_item_id",$cart_id2);
				$sql2=$link->update("order_item",array("order_product_id"=>$sql));
				
				$link->where("cart_id",$cart_id);
				$sql3=$link->update("cart",array("order_id"=>$sql));
				
				$remain_qty=$product_total_qty-1;
				$link->where("product_id",$product_id);
				$sql3=$link->update("product",array("product_total_qty"=>$remain_qty));
			}
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
										<img src=".$project_logo." height='100px' width='100px' alt=.'$project_name'./>
											<h4>Your Order Details:</h4></br>";
											   $message .= '<h3>Customer Name ' . $full_name . '!</h1>';
											   $message .= '<h4>Email :- ' . $order_mail . '</h2>';
											   $message .= '<h4>Phone-no :- ' . $order_phone . '</h2>';
											   $message .= '<h4>Product Details</h2>';
											   $sql2=$link->rawQuery("select op.*,oi.*,p.product_id,p.product_name,p.product_image,p.product_price from order_product op,order_item oi,product p where op.order_product_id=oi.order_product_id and oi.product_id=p.product_id and op.order_product_id=?",array($sql));
												
													foreach($sql2 as $cat)
													{
														$message .= '<h4>'. $cat['product_name'] . '   x   ' .$cat['light_flow'] .' Medium  ' .$cat['heavy_flow'] .' Heavy</h2>';
													}
											   $message .= '<h4>Payment Type :- ' . $radio . '</h2>';
											   $message .= '<h4>Total :- ' . $order_total . '</h2>';
											   
											$message .= "<p>Connect with us on social media: 
											<a href='#'><img src='https://www.infiniqemarketing.com/admin/images/facebook.png' class='imgclass' height='20px' width='20px' style='vertical-align:bottom;height:20px;width:20px;'/></a>&nbsp;&nbsp;
											<a href='#'><img src='https://www.infiniqemarketing.com/admin/images/instagram.png' class='imgclass' height='20px' width='20px' style='vertical-align:bottom;height:20px;width:20px;'/></a>&nbsp;&nbsp; 
											<a href='#'><img src='https://www.infiniqemarketing.com/admin/images/youtube.png' class='imgclass' height='20px' width='20px' style='vertical-align:bottom;height:20px;width:20px;'/></a>
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
						$mail->AddAddress($order_mail);
						$mail->AddAddress($send_address);
						
						$mail->Subject = trim("New Order");
						$mail->MsgHTML($message);

						try {
						  $mail->send();
						  $msg = "An email has been sent.";
						  $msgType = "success";
						 header("location:Success/2/$sql");
						  //header('location:index.php?sid=2');
						} catch (Exception $ex) {
						  $msg = $ex->getMessage();
						  $msgType = "warning";
						}
					
					}
					 catch (Exception $ex) {
					echo $ex->getMessage();
				  }
					
					header("location:Success/2");
			
		}
		//echo "Gusa";
	}
	else if($radio=="card")
	{
		$sql3=$link->insert("order_product",array("coupon_id"=>$coupon_id,"order_comments"=>$order_comments,"order_country"=>$order_country,"order_product_type"=>$radio,"order_total"=>$order_total,"order_state"=>$order_state,"order_city"=>$order_city,"order_pincode"=>$order_pincode,"user_id"=>$uid,"full_name"=>$full_name,"order_mail"=>$order_mail,"order_add1"=>$order_add1,"order_add2"=>$order_add2, "order_phone"=>$order_phone,"is_active"=>0));
		$leads=$link->insert("leads",array("leads_product"=>$product_name,"leads_country_name"=>$order_country,"leads_total"=>$order_total,"leads_state_name"=>$order_state,"leads_city_name"=>$order_city,"leads_postal_code"=>$order_pincode,"leads_name"=>$full_name,"leads_mail"=>$order_mail,"leads_address"=>$order_add1,"leads_phone"=>$order_phone));
		
		if($sql3)
		{
			?>
			<form method="POST" action="https://api.razorpay.com/v1/checkout/embedded">
				  <input type="hidden" name="key_id" value="<?php echo $payment_getway_api; ?>">
				  <input type="hidden" name="name" value="<?php echo $company_name; ?>">
				  <input type="hidden" name="amount" value="<?php echo $order_total*100; ?>">
				  <input type="hidden" name="description" value="<?php echo $company_description; ?>">
				  <input type="hidden" name="image" value="<?php echo $site_url;?>images/logo.png">
				  <input type="hidden" name="prefill[name]" value="<?php echo $full_name; ?>">
				  <input type="hidden" name="prefill[contact]" value="<?php echo $order_phone; ?>">
				  <input type="hidden" name="prefill[email]" value="<?php echo $order_mail; ?>">
				  <!--Address changes-->
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $order_country; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $order_state; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $order_city; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $order_pincode; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $order_add1; ?>">
				  <input type="hidden" name="notes[shipping address]" value="<?php echo $order_add2; ?>">

				 <!-- <input type="hidden" name="notes[shipping address]" value="<?php echo $order_address; ?>">-->
				  <input type="hidden" name="callback_url" value="<?php echo $site_url; ?>active.php?oid=<?php echo $sql3; ?>&uid=<?php echo $uid; ?>">
				<input type="hidden" name="cancel_url" value="<?php echo $site_url; ?>/Cancel/<?php echo $sql3; ?>">
				  <button type="submit" id="btnsubmit" style="display:none;">Submit</button>
				</form>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
				<script>
				$(document).ready(function(){
					//alert("hello");
				$( "#btnsubmit" ).click();
				});

				</script>
			<?php
		}
	}
	
	else
	{
		echo "Something Wrong";
	}
?>