
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
		  include('header.php');
		?>
   
    <!--====== Header Ends ======-->
    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Checkout</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                <p class="info-header"> <i class="fas fa-exclamation-circle"></i> Returning customer? <a data-toggle="collapse" href="#login">Click here to login</a></p>

                <div class="collapse" id="login">
                    <div class="card-body">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                        <form action="#">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Username or email *</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-form">
                                        <label>Password</label>
                                        <input type="password">
                                    </div>
                                </div>
                            </div>

                            <div class="single-form d-flex align-items-center">
                                <button class="main-btn">Login</button>
                                <div class="checkbox">
                                    <input type="checkbox" id="remember">
                                    <label for="remember"><span></span> Remember Me</label>
                                </div>
                            </div>
                            <div class="forget">
                                <a href="#">Lost Your Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

           

            <form action="#">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="checkout-form mt-30">

                            <div class="checkout-title">
                                <h4 class="title">Billing details</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <label>First name *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <label>Last name *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Company name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-select2">
                                        <label>Country *</label>

                                        <div class="form-select2">                                            
                                            <select class="select2">
                                                <option value="0">Select a country…</option>
                                                <option value="1">Bangladesh</option>
                                                <option value="2">Canada</option>
                                                <option value="3">Colombia</option>
                                                <option value="4">Indonesia</option>
                                                <option value="5">Italy</option>
                                                <option value="6">Pakistan</option>
                                                <option value="7">Turkey</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Street address *</label>
                                        <input type="text" placeholder="House number and street name">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Town / City *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-select2">
                                        <label>District *</label>

                                        <div class="form-select2">
                                            <select class="select2">
                                                <option value="">Select an option…</option>
                                                <option value="BAG">Bagerhat</option>
                                                <option value="BAN">Bandarban</option>
                                                <option value="BAR">Barguna</option>
                                                <option value="BARI">Barisal</option>
                                                <option value="BHO">Bhola</option>
                                                <option value="BOG">Bogra</option>
                                                <option value="BRA">Brahmanbaria</option>
                                                <option value="CHA">Chandpur</option>
                                                <option value="CHI">Chittagong</option>
                                                <option value="CHU">Chuadanga</option>
                                                <option value="COM">Comilla</option>
                                                <option value="COX">Cox's Bazar</option>
                                                <option value="DHA">Dhaka</option>
                                                <option value="DIN">Dinajpur</option>
                                                <option value="FAR">Faridpur </option>
                                                <option value="FEN">Feni</option>
                                                <option value="GAI">Gaibandha</option>
                                                <option value="GAZI">Gazipur</option>
                                                <option value="GOP">Gopalganj</option>
                                                <option value="HAB">Habiganj</option>
                                                <option value="JAM">Jamalpur</option>
                                                <option value="JES">Jessore</option>
                                                <option value="JHA">Jhalokati</option>
                                                <option value="JHE">Jhenaidah</option>
                                                <option value="JOY">Joypurhat</option>
                                                <option value="KHA">Khagrachhari</option>
                                                <option value="KHU">Khulna</option>
                                                <option value="KIS">Kishoreganj</option>
                                                <option value="KUR">Kurigram</option>
                                                <option value="KUS">Kushtia</option>
                                                <option value="LAK">Lakshmipur</option>
                                                <option value="LAL">Lalmonirhat</option>
                                                <option value="MAD">Madaripur</option>
                                                <option value="MAG">Magura</option>
                                                <option value="MAN">Manikganj </option>
                                                <option value="MEH">Meherpur</option>
                                                <option value="MOU">Moulvibazar</option>
                                                <option value="MUN">Munshiganj</option>
                                                <option value="MYM">Mymensingh</option>
                                                <option value="NAO">Naogaon</option>
                                                <option value="NAR">Narail</option>
                                                <option value="NARG">Narayanganj</option>
                                                <option value="NARD">Narsingdi</option>
                                                <option value="NAT">Natore</option>
                                                <option value="NAW">Nawabganj</option>
                                                <option value="NET">Netrakona</option>
                                                <option value="NIL">Nilphamari</option>
                                                <option value="NOA">Noakhali</option>
                                                <option value="PAB">Pabna</option>
                                                <option value="PAN">Panchagarh</option>
                                                <option value="PAT">Patuakhali</option>
                                                <option value="PIR">Pirojpur</option>
                                                <option value="RAJB">Rajbari</option>
                                                <option value="RAJ">Rajshahi</option>
                                                <option value="RAN">Rangamati</option>
                                                <option value="RANP">Rangpur</option>
                                                <option value="SAT">Satkhira</option>
                                                <option value="SHA">Shariatpur</option>
                                                <option value="SHE">Sherpur</option>
                                                <option value="SIR">Sirajganj</option>
                                                <option value="SUN">Sunamganj</option>
                                                <option value="SYL">Sylhet</option>
                                                <option value="TAN">Tangail</option>
                                                <option value="THA">Thakurgaon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label>Postcode / ZIP</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <label>Phone *</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <label>Email address *</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="single-form checkout-note">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
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
                                            <th class="Product-name">Product</th>
                                            <th class="Product-price">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Sanitary Pad  × 1</p>
                                            </td>
                                            <td class="Product-price">
                                                <p>INR 249.00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Subtotal</p>
                                            </td>
                                            <td class="Product-price">
                                                <p>INR 249.00</p>
                                            </td>
                                        </tr>
                                        	 <tr>
                                        <td>
                                            <p class="value">Shipping</p>
                                        </td>
                                        <td>
                                            <p class="price" style="text-align:right;">INR 11.00</p>
                                        </td>
                                    </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Total</p>
                                            </td>
                                            <td class="total-price">
                                                <p>INR 260.00</p>
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
                                                <input type="radio" name="radio" id="card" checked="checked">
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
                                                <input type="radio" name="radio" id="cash">
                                                <label for="cash"><span></span> Cash on Delivery</label>
    
                                                <div class="payment-details">
                                                    <p>Pay with cash upon delivery.</p>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </li>
                                    
                                </ul>

                                <div class="checkout-btn">
                                    <a class="main-btn btn-block" href="#">Place Order</a>
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
    
</body>

</html>
