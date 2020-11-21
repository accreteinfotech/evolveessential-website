<?php
	ob_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <?php
    include 'backyard/include/connect.php';
	session_start();
    $seo=$link->rawQueryone("select * from page_seo where page_seo_url=?",array($page_name));
    if($link->count > 0)
    {
        $page_seo_title=$seo['page_seo_title'];
        $page_seo_description=$seo['page_seo_description'];
        $page_seo_keywords=$seo['page_seo_keywords'];
        $page_seo_author=$seo['page_seo_author'];
        
        $page_seo_og_title=$seo['page_seo_og_title'];
        $page_seo_og_description=$seo['page_seo_og_description'];
        $page_seo_og_url=$seo['page_seo_og_url'];
    }
    
?>
    <title><?php echo $project_name; ?> | <?php echo $page_seo_title; ?></title>
    <meta name="description" content="<?php echo $page_seo_description; ?>">
    <meta name="keywords" content="<?php echo $page_seo_keywords; ?>" >
    
    <meta property="og:title" content="<?php echo $project_name; ?> | <?php echo $page_seo_og_title; ?>" />
    <meta property="og:url" content="<?php echo $page_seo_og_url; ?>" />
    <meta property="og:description" content="<?php echo $page_seo_og_description; ?>">
    <base href="<?php echo $site_url; ?>">
    <?php
        include 'head_code.php';
        ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">


    <!-- CSS
    ============================================ -->

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->

    <!-- <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/default.css"> -->


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/component.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css"> -->
    
    
    <!--====== Main Style CSS ======-->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> 
    
</head>

<body>


    <!--====== preloader Start ======-->

    <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!--====== preloader Ends ======-->
    
    <!--====== Header Start ======-->
		<?php 
		  $current_page="checkout";
		  include('header.php');
		  if($cart_count == 0)
		  {
			  header("location:Home");
		  }
		?>
   
    <!--====== Header Ends ======-->
    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Checkout</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="Home">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Checkout Start ======-->

    <section class="checkout-page pt-50 pb-80">
        <div class="container">
            
            <div class="checkout-info mt-30">
			<?php
				if($sflag==0)
				{
					?>
					  <p class="info-header"> <i class="fas fa-exclamation-circle"></i> Returning customer? <a href="Login/Guest">Click here to login</a></p>
					<?php
				}
			?>
            </div>

           

            	<form method="POST" id="checkoutform" action="Insert-Checkout" name="f1" class="form-input-box">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="checkout-form mt-30">
						<?php
							if($sflag == 1)
							{
								$sql_data=$link->rawQueryOne("select * from user where user_id=?",array($_SESSION['user_id']));
							}
						?>
                            <div class="checkout-title">
                                <h4 class="title">Billing details</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Full name *</label>
                                        <input  id="full_name" name="full_name" class="form-control" type="text" value="<?php if($sflag==1){echo $sql_data['user_full_name'];} ?>" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                      <label>E-mail*</label>
										<input name="order_mail" id="order_mail" class="form-control" placeholder="E-mail Address" value="<?php if($sflag==1){echo $sql_data['user_email'];} ?>" type="text">
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Phone No.*</label>
										<input placeholder="Phone Number" class="form-control" name="order_phone" id="order_phone" value="<?php if($sflag==1){echo $sql_data['user_phone'];} ?>" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-select2">
                                        <label>Country *</label>

                                        <div class="form-select2">                                            
                                            <select class="select2" onchange="countrycheck(this.value);" name="order_country" id="order_country">
                                                 <option value="">Select Country</option>
													<?php
														$country=$link->rawQuery("select * from  countries");
														if($link->count > 0)
														{
															foreach($country as $cont)
															{
																?>
																 <option value="<?php echo $cont['id']; ?>" <?php if($sflag==1){if($cont['id'] == $sql_data['user_country']){echo "selected";} }?>><?php echo $cont['name']; ?></option>
																<?php
															}
														}
													?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="single-select2">
                                       <label>State*</label>

                                        <div class="form-select2">                                            
                                             <select class="select2" onchange="citycheck(this.value);" name="order_state" id="order_state">
                                                 <?php 
													if($sflag==1)
													{
														?>
														<option value="<?php echo $sql_data['user_state']; ?>"></option>
														<?php
													} 
													else
													{
														?>
														<option value="">Select State</option>
														<?php
													}
												?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="single-select2">
                                       <label>City*</label>

                                        <div class="form-select2">                                            
                                            <select class="select2" name="order_city" id="order_city">
                                                 <?php 
														if($sflag==1)
														{
															?>
															<option value="<?php echo $sql_data['user_city']; ?>"></option>
															<?php
														} 
														else
														{
															?>
															 <option value="">Select City</option>
															<?php
														}
													?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Street address *</label>
                                        <input type="text" value="<?php if($sflag==1){echo $sql_data['user_add1'];} ?>" name="order_add1" id="order_add1" placeholder="Address 1*">
                                        <input type="text"value="<?php if($sflag==1){echo $sql_data['user_add2'];} ?>" name="order_add2" id="order_add2" placeholder="Address 2*">
                                    </div>
                                </div>
                               
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Postcode / ZIP</label>
                                        <input type="text" value="<?php if($sflag==1){echo $sql_data['user_pincode'];} ?>" name="order_pincode" id="order_pincode" placeholder="Pincode*">
                                    </div>
                                </div>
                            </div>

                            <div class="single-form checkout-note">
                                <label>Order notes</label>
                                <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Note about your order, eg. special notes fordelivery."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="checkout-review-order mt-30">
                            <div class="checkout-title">
                                <h4 class="title">Your Order</h4>
                            </div>

                            <div class="checkout-review-order-table table-responsive mt-15">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="Product-name">Product Details</th>
                                            <th class="Product-price">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$show=$link->rawQuery("select c.*,p.product_id,p.product_image,p.product_price,p.product_name,p.product_total_qty from order_item c,product p where c.product_id=p.product_id and c.user_id=? and c.order_product_id=0",array($uid));
									if($link->count > 0)
									{
										$product_org_price=0;
										foreach($show as $show_cart)
										{
											$product_org_price=$product_org_price+$show_cart['product_price'];
											?>
											  <input type="hidden" name="cart_id2[]" value="<?php echo $show_cart['order_item_id']; ?>">
											  <input type="hidden" name="cart_id[]" value="<?php echo $show_cart['cart_id']; ?>">
											  <input type="hidden" name="product_id[]" value="<?php echo $show_cart['product_id']; ?>">
											  <input type="hidden" name="product_total_qty[]" value="<?php echo $show_cart['product_total_qty']; ?>">
											  <input type="hidden" name="heavy_flow[]" value="<?php echo $show_cart['heavy_flow']; ?>">
											  <input type="hidden" name="light_flow[]" value="<?php echo $show_cart['light_flow']; ?>">
											  <input type="hidden" name="product_name[]" value="<?php echo $show_cart['product_name']; ?>">
											  <input type="hidden" name="price[]" value="<?php echo $show_cart['price']; ?>">
											  <input type="hidden" name="order_total" id="order_total" value="<?php echo sprintf("%.2f", $grand_total); ?>">
											  <tr class="cart_item">
											 <td class="product-name">
													<img style="height:50px;width:50px;" src="backyard/images/product_image/<?php echo $show_cart['product_image']; ?>" alt="product">
												</td>
												<td class="Product-name">
												<div class="review-wrap">
														<span class="cart_item_title"><?php echo $show_cart['product_name']; ?></span>
														</br>
														<p class="cart-price" style="font-size:12px;"><?php echo $show_cart['light_flow']; ?> Mediam, <?php echo $show_cart['heavy_flow']; ?> High</p>
														<span class="product-quantity"><?php //echo $show_cart['qty']; ?></span>
													</div>
												</td>
												<td class="Product-price">
													<p><?php echo "INR  ".sprintf("%.2f", $show_cart['price']) ; ?></p>
												</td>
											</tr>
											<?php
										}
									}
								 ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Subtotal</p>
                                            </td>
											<td></td>
											<?php
												if($cart_count > 1)
												{
													?>
													<td>
														<p class="price" style="text-align:right;"><del>INR <?php echo sprintf("%.2f", $product_org_price) ; ?></del> INR <?php echo sprintf("%.2f",$total) ; ?></p>
													</td>
													<?php
												}
												else
												{
													?>
													<td>
														<p class="price" style="text-align:right;">INR <?php echo sprintf("%.2f",$total) ; ?></p>
													</td>
													<?php
												}
											?>
                                        </tr>
                                     <tr>
										<td>
											<p class="value" style="color:#40c13e">Delivery Fee</p>
										</td>
										<td></td>
										<td>
											<p class="price" style="text-align:right;color:#40c13e">FREE</p>
										</td>
									</tr>
                                    <tr>
										<td>
											<p class="value" style="color:#333">Total to be Paid</p>
										</td>
										<td></td>
										<td>
											<p class="price" style="text-align:right;color:#333" id="tot2"><?php echo "INR ".sprintf("%.2f",$grand_total) ; ?></p>
										</td>
									</tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="checkout-payment">
                                <ul>
                                  <li>
                                        <div class="single-payment">
                                            <div class="payment-radio radio">
                                                <input type="radio" onchange="paymenttype();" name="payment" value="card" id="card" checked="checked">
                                                <label for="card"><span></span> Online Payment</label>
    
                                                <div class="payment-details">
                                                    <p>Pay with credit or debit cards.</p>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </li>
                                  
                                    <li>
                                        <div class="single-payment">
                                            <div class="payment-radio radio">
                                                <input type="radio" onchange="paymenttype();" name="payment" value="cash" id="cash">
                                                <label for="cash"><span></span> Cash on Delivery</label>
    
                                                <div class="payment-details">
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </li>
                                    
                                </ul>

                                <div class="checkout-btn">
									<input type="submit" class="main-btn btn-block" value="Place Order">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </section>

    <!--====== Checkout Ends ======-->

    <!--====== Footer Start ======-->

   <?php 
   include('footer.php');
   ?>

    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

   
    <!--====== Start ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== Ends ======-->

    <!--====== Overlay Start ======-->
    
    <div class="overlay"></div>

    <!--====== Overlay Ends ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="backyard/js/jquery.validate.js"></script>
	<script type="text/javascript" src="backyard/js/jquery.validate.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
	<script>
	$( document ).ready(function() {
			//alert("hell");
    		<?php
    			if($sflag==1)
    			{
    				?>
    				var f=1;
    				<?php
    			}
    			else
    			{
    				?>
    				var f=0;
    				<?php
    			}
    		?>
    		if(f==1)
    		{
    			var order_country= $("#order_country").val();
    			var order_state= $("#order_state").val();
    			countrycheck2(order_country,order_state);

    			//city

    			var order_city = $("#order_city").val();
    			citycheck2(order_state,order_city);
			}
		});
		$( document ).ready( function () {
			$( "#checkoutform" ).validate( {
				rules: {
					full_name: 
					{
						required: true,
						minlength: 2,
					},
					
					lastname: "required",

					order_country: "required",
                    order_state: "required",
                    order_city: "required",
                    order_pincode:
                    {
                        required: true,
                        digits: true,
                        maxlength: 6,
                        minlength: 6
                    },
                    order_add1: "required",
                    order_add2: "required",

					/*order_address: "required",
					country_name: "required",
					city_name: "required",
					state_name: "required",
					order_postal_code:{
						required: true,
						digits: true,
						minlength: 6,
						maxlength: 6
					},*/
					order_phone: {
						required: true,
						 digits: true,
						 minlength: 10,
						maxlength: 10
					},
					username: {
						required: true,
						minlength: 2
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					order_mail: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					full_name: 
					{
						required: "Please enter your full name",
						minlength: "Please enter alteast 2 charactor",
					},
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					order_phone: {
						required: "Please enter your phone no.",
						digits: "Enter Only Dighits",
						minlength: "Enter Only 10 Dighits",
						maxlength: "Enter Only 10 Dighits",
					},

					order_country: "Please Enter Country *",
                    order_state: "Please Select State *",
                    order_city: "Please Select City *",
                    order_pincode:{
                        required: "Please Enter Pincode *",
                        digits: "Please Enter Only Digits *",
                        minlength: "Please Enter 6 digits Only *",
                        maxlength: "Please Enter 6 digits Only *"
                    }, 
                    order_add1: "Please Enter Address *",
                    order_add2: "Please Enter Address *",



					/*order_postal_code: {
						required: "Please enter your zip code",
						digits: "Enter Only Dighits",
						minlength: "Enter Only 6 Dighits",
						maxlength: "Enter Only 6 Dighits",
					},*/
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					order_mail: {
						required: "Please enter your e-mail address",
						email: "Please enter a valid email address",
					},
					order_address: "please enter your address",
					country_name: "please enter your country",
					city_name: "please enter your city",
					state_name: "please enter your state",
					agree: "Please accept our policy",
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element);
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}
			} );

		} );
		 //country check
    function countrycheck2(val,val2)
    {
        $.ajax({
            type: "POST",
           url: "state_check.php",
           data: "order_country="+val+"&order_state="+val2,
                
                // serializes the form's elements.
           success: function(data)
           {
            //alert(data);
                if(data != '')
                {
                    $("#order_state").html(data);
                    //$("#rerror").html("Existing Mail! Please Enter New Mail For Registration");
                    //$("#reg").prop('disabled', true);
                    //mailcheck.preventDefault();
                    //swal("Good job!", "You clicked the button!", "warning");
                }
           }
        });
        
    }



    function citycheck2(val,val2)
    {
        $.ajax({
            type: "POST",
           url: "city1_check.php",
           data: "order_state="+val+"&order_city="+val2,
                
                // serializes the form's elements.
           success: function(data)
           {
            //alert(data);
                if(data != '')
                {
                    $("#order_city").html(data);
                    //$("#rerror").html("Existing Mail! Please Enter New Mail For Registration");
                    //$("#reg").prop('disabled', true);
                    //mailcheck.preventDefault();
                    //swal("Good job!", "You clicked the button!", "warning");
                }
           }
        });
        
    }


    //country check
    function countrycheck(val)
    {
        //alert(val);
        $.ajax({
            type: "POST",
           url: "country_check.php",
           data: "user_country="+val,
                
                // serializes the form's elements.
           success: function(data)
           {
            //alert(data);
                if(data != '')
                {
                    $("#order_state").html(data);
                    //$("#rerror").html("Existing Mail! Please Enter New Mail For Registration");
                    //$("#reg").prop('disabled', true);
                    //mailcheck.preventDefault();
                    //swal("Good job!", "You clicked the button!", "warning");
                }
           }
        });
        
    }

    //city check
    function citycheck(val)
    {
     //  alert(val);
        $.ajax({
            type: "POST",
           url: "city_check.php",
           data: "user_city="+val,
                
                // serializes the form's elements.
           success: function(data)
           {
            //alert(data);
                if(data != '')
                {
                    $("#order_city").html(data);
                    //$("#rerror").html("Existing Mail! Please Enter New Mail For Registration");
                    //$("#reg").prop('disabled', true);
                    //mailcheck.preventDefault();
                    //swal("Good job!", "You clicked the button!", "warning");
                }
           }
        });
        
    }
	</script>
    <!--====== All Plugins js ======-->
    <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/modernizr.custom.js"></script>
    <script src="assets/js/plugins/jquery.dlmenu.js"></script>
    <script src="assets/js/plugins/jquery.paroller.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/photoswipe.min.js"></script>
    <script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/plugins/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery.appear.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script> -->

    <!-- <script src="assets/js/plugins/parallax.min.js"></script> -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <script src="assets/js/plugins.min.js"></script>

    
    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="assets/js/map-script.js"></script>
    
</body>

</html>
