
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <?php
    include 'backyard/include/connect.php';
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
    <?php 
	$current_page="Register";
	include('header.php');
	?>
    <!--====== Header Start ======-->

    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Register</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Login Register Start ======-->

    <section class="login-register-area pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-register-content">
                        <h4 class="title">Creat New Account</h4>

                        <div class="login-register-form">
                            <form id="formsubmit" action="register_code.php" method="post">
                                <div class="single-form">
                                     <label>Full Name *</label>
                                        <input type="text" name="user_full_name" id="user_full_name" value="">
                                </div>
                                <div class="single-form">
                                    <label>User Company *</label>
                                        <input type="text" name="user_company" id="user_company" value="">
                                </div>
								<div class="single-form">
                                    <label>Birth Date *</label>
                                        <input type="date" name="user_dob" id="user_dob" value="">
                                </div>
                                <div class="single-form">
                                     <label>Email address *</label>
                                        <input type="email" onchange="mailcheck(this.value);" name="user_email" id="user_email" value="">
                                </div>
								<p id="ererror"></p>
                                <div class="single-form">
                                    <label for="upassword">Password *</label>
                                        <input type="password" name="user_password" id="user_password" value="">
                                        <span toggle="#user_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="single-form">
                                   <label for="ucpassword">Confirm Password *</label>
                                        <input type="password" name="user_cpassword" id="user_cpassword" value="">
                                        <span toggle="#user_cpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="single-form">
                                    <label>Country *</label>
                                        <select style="width: 100%;
    height: 50px;
    padding: 0 15px;
    border: 1px solid #ebebeb;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    font-size: 14px;
    color: #232324;" onchange="countrycheck(this.value);" name="user_country" id="user_country" style="width:100%;">
                                        <option value="">Select Country</option>
                                        <?php
                                                $country=$link->rawQuery("select * from  countries");
                                                if($link->count > 0)
                                                {
                                                    foreach($country as $cont)
                                                    {
                                                        ?>
                                                         <option value="<?php echo $cont['id']; ?>"><?php echo $cont['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        
                                        </select>.
                                    </div>
                                    <div class="single-form" id="mystate">
                                    <label>STATE *</label>
                                <select style="width: 100%;
    height: 50px;
    padding: 0 15px;
    border: 1px solid #ebebeb;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    font-size: 14px;
    color: #232324;" onchange="citycheck(this.value);" name="user_state" id="user_state" style="width:100%;">
                                    <option value="">Select State</option>
                                </select>                     
                                </div>
                                <div class="single-form" id="mycity">
                                    <label>CITY *</label>
                                 <select style="width: 100%;
    height: 50px;
    padding: 0 15px;
    border: 1px solid #ebebeb;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    font-size: 14px;
    color: #232324;" name="user_city" id="user_city" style="width:100%;">
                                    <option value="">Select City</option>
                                </select>
                                </div>
                                <div class="single-form">
                                    <label>ADDRESS 1 *</label>
                                        <input type="text" name="user_add1" id="user_add1" placeholder="Address 1*">
                                </div>
                                <div class="single-form">
                                    <label>ADDRESS 2 *</label>
                                        <input type="text" name="user_add2" id="user_add2" placeholder="Address 2*">
                                </div>
                                <div class="single-form">
                                    <label>PINCODE *</label>
                                        <input type="text" name="user_pincode" id="user_pincode" placeholder="Pincode*">
                                </div>
                                <div class="single-form">
                                    <label for="uphone">Phone Number&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="phone" name="user_phone" id="user_phone" value="">
                                </div>
                                <div class="single-form">
                                    <button class="main-btn btn-block">Register</button>
                                </div>
                             
                                <div class="single-form">
                                    <label>Already have an account?</label>
                                    <a href="login.php" class="main-btn main-btn-2 btn-block">Log in instead!</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>

    <!--====== Login Register Ends ======-->

    <!--====== Footer Start ======-->

   <?php 
    include('footer.php');
   ?>

    <!--====== Footer Ends ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Product Quick View Start ======-->
  
    <div class="modal fade" id="productQuick">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
                </div> 
                
                <div class="product-quick-view">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="quick-view-image">
                                <div class="quick-view-thumb">
                                    <div class="quick-thumb-active">
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-37.jpg" alt="">
                                        </div>
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-38.jpg" alt="">
                                        </div>
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-27.jpg" alt="">
                                        </div>
                                        <div class="single-quick-thumb">
                                            <img src="assets/images/product/product-28.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-preview">
                                    <div class="quick-preview-active">
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-37.jpg" alt="">
                                        </div>
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-38.jpg" alt="">
                                        </div>
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-27.jpg" alt="">
                                        </div>
                                        <div class="single-quick-preview">
                                            <img src="assets/images/product/product-28.jpg" alt="">
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-view-content">
                                <h4 class="title">Oversized Check Dress</h4>
                                <span class="sku-id">REF. 1104693 - TOMY</span>

                                <div class="quick-price">
                                    <span class="regular-price">£250.00</span>
                                    <span class="sale-price">£200.00</span>
                                </div>
                                <div class="quick-quantity-cart-wishlist-compare flex-wrap">
                                   <form action="#">
                                        <div class="quick-quantity d-flex">
                                            <button type="button" class="sub"><i class="fal fa-minus"></i></button>
                                            <input type="text" value="1" />
                                            <button type="button" class="add"><i class="fal fa-plus"></i></button>
                                        </div>
                                        <div class="quick-cart">
                                            <button class="main-btn">Add to Cart</button>
                                        </div>
                                   </form>
                                   <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" class="quick-wishlist"><i class="fal fa-heart"></i></a>
                                   <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Compare" class="quick-compare"><i class="fal fa-repeat-alt"></i></a>
                                </div>
                                <div class="quick-description">
                                    <p>Sed vitae eros a quam malesuada porttitor nec nec orci. Ut lacus augue, bibendum at tristique at, ornare eget quam. Donec volutpat ut nibh id sagittis. Morbi fringilla ac libero in consequat.</p>
                                </div>
                                <div class="quick-share">
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Product Quick View Ends ======-->

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
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
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
    <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
    <script>
    //Form Validation
        $( document ).ready( function () {
            $( "#formsubmit" ).validate( {
                rules: {
                    user_full_name: "required",
                    user_company: "required",
                    user_email:
                    {
                      required: true,
                      email: true
                    },
                    user_phone:
                    {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                    },
                    user_pincode:
                    {
                      required: true,
                      digits: true,
                      minlength: 6,
                      maxlength: 6
                    },
                    user_country: "required",
                    user_state: "required",
                    user_city: "required",
                    user_address: "required",
                    user_company: "required",
                    user_add1: "required",
                    user_add2: "required",
                    privacy1: "required",
                    privacy2: 
                    {
                      equalTo: "#privacy1"
                    },
                    user_password: "required",
                    user_cpassword:
                    {
                      required: true,
                      equalTo: "#user_password"
                    },
                },
                messages: {
                    
                    user_full_name: "Please Enter Username*",
                    user_company: "Please Enter Company*",
                    user_email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *",
                    },
                    user_phone:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    user_pincode:
                    {
                      required: "Please Enter Pincode *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 6 Digits *",
                      maxlength: "Please Enter Only 6 Digits *"
                    },
                    user_country: "Please Select Country *",
                    user_state: "Please Select State *",
                    user_city: "Please Select City *",
                    user_address: "Please Enter Address *",
                    user_add1: "Please Enter Address Line 1 *",
                    user_add2: "Please Enter Address Line 2 *",
                    privacy1: "Please Accept Privacy Policy *",
                    privacy2:
                    {
                      equalTo: "Please Accept Privacy Policy *"
                    },
                    user_password: "Please Enter Password *",
                    user_cpassword:
                    {
                      required: "Please Enter Confirm Password *",
                      equalTo: "Both Password Not Match*"
                    },
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass( "invalid-feedback" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.next("br") );
                    } else {
                        error.insertAfter( element );
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
</script>
<script>

    $(".toggle-password").click(function() {

          $(this).toggleClass("lynessa-Input lynessa-Input--text");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });
		
    function mailcheck(val)
        {
            $.ajax({
             type: "POST",
               url: "mail_check.php",
               data: "user_email="+val,
                    
                    // serializes the form's elements.
               success: function(data)
               {
                    if(data == 'already')
                    {
                        $("#ererror").html("Existing Mail");
                        $("#ererror").css("color","red");
                        $("#reg").prop('disabled', true);
                        //mailcheck.preventDefault();
                        //swal("Good job!", "You clicked the button!", "warning");
                    }
                    else
                    {
                        $("#ererror").html("");
                        $("#reg").prop('disabled', false);
                    }
               }
            });
            
        }

    //country check
    $(document).ready(function(){
        $.ajax({
            type: "POST",
           url: "get_country.php",
                
                // serializes the form's elements.
           success: function(data)
           {
            //alert(data);
                if(data != '')
                {
                    //$("#user_state").html(data);
                    $("#mycountry").html(data);
                    //$("#rerror").html("Existing Mail! Please Enter New Mail For Registration");
                    //$("#reg").prop('disabled', true);
                    //mailcheck.preventDefault();
                    //swal("Good job!", "You clicked the button!", "warning");
                }
           }
        });
    });

function countrycheck(val)
    {
        citycheck(val);
       // alert(val);
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
                    //$("#user_state").html(data);
                    $("#mystate").html(data);
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
       //alert(val);
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
                    $("#mycity").html(data);
                    //$("#rerror").html("Existing Mail! Please Enter New Mail For Registration");
                    //$("#reg").prop('disabled', true);
                    //mailcheck.preventDefault();
                    //swal("Good job!", "You clicked the button!", "warning");
                }
           }
        });
        
    }
</script>
    
</body>

</html>
