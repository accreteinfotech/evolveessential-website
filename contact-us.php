
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
    
    <!--====== Header Start ======-->
		<?php 
		$current_page="contact_us";
		  include('header.php');
		?>
    
    <!--====== Header Ends ======-->
    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Contact Us</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->

    <section class="contact-page pt-55 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-title text-center">
                        <h4 class="title">Let us know what you have in mind, and we’ll get back to you in an instant!</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form pt-20">
                        <form id="cform" action="insert_mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="contact_name" id="contact_name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="contact_email" id="contact_email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="contact_website" id="contact_website" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="contact_phone" id="contact_phone" placeholder="Your Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="contact_des" id="contact_des" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button class="main-btn btn-block">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->

    <!--====== Contact Map Start ======-->

    <div class="contact-map">
        <div id="contact-map"></div>      
    </div>

    <!--====== Contact Map Ends ======-->

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

    <!--====== Overlay Start ======-->
    
    <div class="overlay"></div>

    <!--====== Overlay Ends ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <script src="backyard/js/jquery.min.js"></script>
    <script src="backyard/js/jquery.validate.js"></script>
    <script src="backyard/js/jquery.validate.min.js"></script>
    
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


    <script>
    //Form Validation
        $( document ).ready( function () {
            $( "#cform" ).validate( {
                rules: {
                    
                    contact_name: "required",
                    contact_email:
                    {
                      required: true,
                      email: true
                    },
                    contact_website:"required",
                    contact_phone:
                    {
                      required: true,
                      digits: true,
                      minlength: 10,
                      maxlength: 10
                    },
                    contact_des:"required",
                },
                messages: {
                    
                    contact_name: "Please Enter Contact Name*",
                    contact_email:
                    {
                      required: "Please Enter E-mail *",
                      email: "Please Enter Valid E-mail *",
                    },
                    contact_phone:
                    {
                      required: "Please Enter Phone No. *",
                      digits: "Please Enter Only Digits *",
                      minlength: "Please Enter Only 10 Digits *",
                      maxlength: "Please Enter Only 10 Digits *"
                    },
                    contact_website: "Please Enter Website *",
                    contact_des: "Please Enter Message *",
                    
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
    
</body>

</html>
