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
		 include('header.php')
		?>

    <!--====== Header Ends ======-->
    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">My Account</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== My Account Start ======-->

    <section class="my-account-page pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <div class="my-account-menu mt-30">
                        <ul class="nav account-menu-list flex-column">
                            <li>
                              <a class="active" data-toggle="pill" href="#pills-dashboard"><i class="far fa-tachometer-alt-fast"></i> Dashboard</a>
                            </li>
                            <li>
                              <a data-toggle="pill" href="#pills-order"><i class="far fa-Shopping-cart"></i> Order</a>
                            </li>
                           
                            <li>
                              <a data-toggle="pill" href="#pills-account"><i class="far fa-user"></i>Change Password</a>
                            </li>
                            <li>
                                <a href="Logout"><i class="far fa-sign-out-alt"></i> Logout</a>
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8">
                    <div class="tab-content my-account-tab mt-30" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-dashboard">
                            <div class="my-account-dashboard account-wrapper">
                                <h4 class="account-title">Dashboard</h4>
                                <div class="welcome-dashboard">
                                    <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong> <a href="login.php">Logout</a> )</p>
                                </div>
                                <p class="mt-25">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-order">
                            <div class="my-account-order account-wrapper">
                                <h4 class="account-title">Orders</h4>
                                <div class="account-table text-center mt-30 table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="no">Order Id</th>
                                                <th class="name">Order Status</th>
                                                <th class="name">Show</th>
                                                <th class="date">Date</th>
                                                <th class="addresse">Address</th>
                                                <th class="pincode">Pincode</th>
                                                <th class="status">Type</th>
                                                <th class="total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    //$sql=$link->rawQuery("select * from order_product op where op.is_active='1' group by op.order_product_id");
                                    $sql=$link->rawQuery("select * from order_product op ,status s where s.status_id=op.status_id and op.is_active='1' and op.user_id=? group by op.order_product_id order by op.order_product_id desc",array($_SESSION['user_id']));
                                    if($link->count > 0)
                                    {
                                        foreach($sql as $cat)
                                        {
                                ?>
                                            <tr>
                                                <td><?php echo $cat['order_product_id']; ?></td>
                                                <?php
                                                    if($cat['status_id']==1)
                                                    {
                                                        $flag=1;
                                                ?>
                                                <td><a style="background-color:#FF0000;color:#ffffff;"><?php echo $cat['status_name'];?></a></td>
                                                <?php
                                                    }
                                                    else if($cat['status_id']==2)
                                                    {
                                                ?>
                                                <td><a style="background-color:#FF0000;color:#ffffff;"><?php echo $cat['status_name'];?></a></td>
                                                <?php
                                                    }
                                                    else if($cat['status_id']==3)
                                                    {
                                                ?>
                                                <td><a style="background-color:#FF0000;color:#ffffff;"><?php echo $cat['status_name'];?></a></td>
                                                <?php
                                                    }
                                                    else
                                                    {
                                                ?>
                                                <td><a style="background-color:#FF0000;color:#ffffff;"><?php echo $cat['status_name'];?></a></td>
                                                <?php
                                                    }
                                                ?>
                                                <td><a onclick="showorder(<?php echo $cat['order_product_id']; ?>);" style="cursor:pointer;"><img style="height: 30px;width: 30px;"  src="backyard/img/eye.png"></a></td>
                                                <td><?php echo date('d M, Y',strtotime($cat['order_date_time'])); ?></td>
                                                <td><?php echo $cat['order_add1'].$cat['order_add2']; ?></td>
                                                <td><?php echo $cat['order_pincode']; ?></td>
                                                <td><?php echo $cat['order_product_type']; ?></td>
                                                <?php
                                                    if($cat['order_total']!=0)
                                                    {
                                                ?>
                                                <td><?php echo sprintf("%.2f", $cat['order_total']); ?></td>
                                                <?php
                                                    }
                                                ?>
                                            </tr>
                                            <?php
                                                    }
                                                }
                                                else
                                                {
                                            ?>
                                                    <tr>
                                                        <td colspan="8" style="text-align:center;">No Order Found.</td>
                                                    </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                       
                        <div class="tab-pane fade" id="pills-account">
                            <div class="my-account-details account-wrapper">
                                <h4 class="account-title">Change Password</h4>

                                <div class="account-details">
                                    <form method="POST" id="changepassword_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input type="password" name="current_password" id="current_password" placeholder="Current Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="password" name="new_password" id="new_password" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input name="c_password" id="c_password" type="password" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="submit" class="main-btn" name="save_account_details" value="Save changes">
                                            </div>
                                        </div>
                                        <div>
                                            <p id="err" style="color:red;display:none;">Old Password Invalid.</p>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== My Account Ends ======-->

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
            $( "#changepassword_form" ).validate( {
                rules: {
                    
                    user_full_name: "required",
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
                    current_password: "required",
                    new_password: "required",
                    
                    user_pincode:
                    {
                        required: true,
                        digits: true,
                        maxlength: 6,
                        minlength: 6
                    },
                    user_add1: "required",
                    user_add2: "required",
                    //user_address: "required",
                    privacy1: "required",
                    privacy2: 
                    {
                      equalTo: "#privacy1"
                    },
                    user_password: "required",
                    c_password:
                    {
                      required: true,
                      equalTo: "#new_password"
                    },
                },
                messages: {
                    
                    user_full_name: "Please Enter Full Name *",
                    user_email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *"
                    },
                    user_phone:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    current_password: "Please Enter Old Password",
                    new_password: "Please Enter New Password",
                    user_pincode:{
                        required: "Please Enter Pincode *",
                        digits: "Please Enter Only Digits *",
                        minlength: "Please Enter 6 digits Only *",
                        maxlength: "Please Enter 6 digits Only *"
                    }, 
                    user_add1: "Please Enter Address *",
                    user_add2: "Please Enter Address *",

                    //user_address: "Please Enter Address *",
                    privacy1: "Please Accept Privacy Policy *",
                    privacy2:
                    {
                      equalTo: "Please Accept Privacy Policy *"
                    },
                    c_password:
                    {
                      required: "Please Enter Confirm Password *",
                      equalTo: "Both Password Not Match*"
                    },
                    
                },
                 submitHandler: function(form)
                 {
                       $.ajax({
                       type: "POST",
                       url: "change_password_code.php",
                       data: $("#changepassword_form").serialize(),
                            
                            // serializes the form's elements.
                       success: function(data)
                       {
                           alert(data);
                            if(data == 'success')
                            {
                                $('#myToast').addClass('animated fadeIn');
                                $("#myToast").css('display','block');
                                $("#err").css('display','none');
                                window.location.href='Success/7';
                                //swal("Booking", "Thank You For Your Appointment Booking","success");
                                //alert("success");
                            }
                            else
                            {
                                $("#err").css('display','block');
                                event.preventDefault();
                            }
                       }
                    });
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

        function showorder(val)
{
    $.ajax({
           type: "POST",
           url: "show_order.php",
           data: "oid="+val,
                
                // serializes the form's elements.
           success: function(data)
           {
               //alert(data);
                if(data != '')
                {
                    $("#vieworder").css("display","none");
                    $("#showorder").css("display","table");
                    $("#showorder").html(data);
                }
                else
                {
                    event.preventDefault();
                }
           }
        });
}
$("#tab").click(function(){
       $("#vieworder").css("display","table");
       $("#showorder").css("display","none");
});
</script>
    
</body>

</html>
