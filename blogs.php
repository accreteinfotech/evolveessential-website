
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
   $current_page="blogs";
    include('header.php');
   ?>

    <!--====== Header Ends ======-->
    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Our Blogs</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Blog Start ======-->

    <section class="blog-page site-bg pt-50 pb-100">
        <div class="container">
            <?php
                            $blogs=$link->rawQuery("select * from blog where is_active = 1");
                                if($link->count > 0)
                                    {
                                        foreach($blogs as $cat)
                                        {
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-blog blog-5 mt-50">
                        <div class="blog-image">
                            <a href="Blog/<?php echo $cat['blog_alias']; ?>">
                                <img src="backyard/images/blog_thumb_image/<?php echo $cat['blog_thumb_image']; ?>" alt="<?php echo $cat['blog_name']; ?>">
                                <i class="fal fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="blog-content text-center">
                            <h4 class="title"><a href="Blog/<?php echo $cat['blog_alias']; ?>"><?php echo $cat['blog_name']; ?></a></h4>
                            <ul class="blog-meta">
                                <li><a href="Blog/<?php echo $cat['blog_alias']; ?>">By <span><?php echo $cat['blog_writer']; ?></span></a></li>
                                <li><a href="Blog/<?php echo $cat['blog_alias']; ?>"><i class="fal fa-clock"></i><?php echo $cat['blog_date']; ?></a></li>
                            </ul>
                            <p><?php echo $cat['blog_short_desc'];?></p>
                            
                            <a href="Blog/<?php echo $cat['blog_alias']; ?>" class="main-btn">Read More</a>                            
                        </div>
                    </div>
                </div>               
            </div>
            <?php
                    }
                }
            ?>
            
        </div>
    </section>

    <!--====== Blog Ends ======-->

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
