
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

    <header class="header-area">

        <div class="header-navbar">
            <div class="container-fluid custom-container">
                <div class="header-wrapper d-flex justify-content-between align-items-center">

                    <div class="header-logo">
                        <a href="index.html">
                            <img src="assets/images/logo-black.png" alt="Logo">
                        </a>
                    </div>

                    <div class="header-menu site-nav d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="static active">
                                <a href="#">Demo</a>
                                <ul class="sub-menu sub-mega-menu flex-wrap">
                                    <li>
                                        <a class="menu-title" href="#">Column #1</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                            <li><a href="index-4.html">Home 04</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-title" href="#">Column #2</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="index-5.html">Home 05</a></li>
                                            <li><a href="index-6.html">Home 06</a></li>
                                            <li><a href="index-7.html">Home 07</a></li>
                                            <li><a href="index-8.html">Home 08</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-title" href="#">Column #3</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="index-9.html">Home 09</a></li>
                                            <li><a href="index-10.html">Home 10</a></li>
                                            <li><a href="index-11.html">Home 11</a></li>
                                            <li><a href="index-12.html">Home 12</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-title" href="#">Column #4</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="index-13.html">Home 13</a></li>
                                            <li><a href="index-14.html">Home 14</a></li>
                                            <li><a href="index-15.html">Home 15</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="static">
                                <a href="#">Shop</a>
                                <ul class="sub-menu sub-mega-menu flex-wrap">
                                    <li>
                                        <a class="menu-title" href="#">Shop Page</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                            <li><a href="shop-metro.html">Shop Metro</a></li>
                                            <li><a href="shop-masonry.html">Shop Masonry</a></li>
                                            <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                            <li><a href="lookbook.html">Look Book</a></li>
                                            <li><a href="collections.html">Collections</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-title" href="#">Product Page</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="product-simple-01.html">Product Simple 01</a></li>
                                            <li><a href="product-simple-02.html">Product Simple 02</a></li>
                                            <li><a href="product-simple-03.html">Product Simple 03</a></li>
                                            <li><a href="product-simple-04.html">Product Simple 04</a></li>
                                            <li><a href="product-grouped.html">Product Grouped</a></li>
                                            <li><a href="product-affiliate.html">Product Affiliate</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-title" href="#">Other Page</a>
                                        <ul class="sub-mega-item">
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="order-tracking.html">Order Tracking</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="menu-image" href="shop-sidebar.html">
                                            <img src="assets/images/menu.jpg" alt="Menu">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Page</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">About Us <i class="fal fa-chevron-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-01.html">About US 01</a></li>
                                            <li><a href="about-02.html">About US 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="our-services.html">Our Service</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><a href="lookbook.html">Look Book</a> <span>Hot</span></li>
                            <li>
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">Blog Layout <i class="fal fa-chevron-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                                            <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                    <div class="header-meta">
                        <ul class="meta">
                            <li><a class="cart-toggle" href="javascript:void(0)"><i class="far fa-Shopping-cart"></i><span>3</span></a></li>
                            <li><a class="search-toggle" href="javascript:void(0)"><i class="far fa-search"></i></a></li>
                            <li><a class="sidebar-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div id="dl-menu" class="dl-menuwrapper d-lg-none">
                <button class="dl-trigger"></button>
                
                <ul class="dl-menu">
                    <li>
                        <a href="#">Demo</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="#">Column #1</a>
                                <ul class="dl-submenu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column #2</a>
                                <ul class="dl-submenu">
                                    <li><a href="index-5.html">Home 05</a></li>
                                    <li><a href="index-6.html">Home 06</a></li>
                                    <li><a href="index-7.html">Home 07</a></li>
                                    <li><a href="index-8.html">Home 08</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column #3</a>
                                <ul class="dl-submenu">
                                    <li><a href="index-9.html">Home 09</a></li>
                                    <li><a href="index-10.html">Home 10</a></li>
                                    <li><a href="index-11.html">Home 11</a></li>
                                    <li><a href="index-12.html">Home 12</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Column #4</a>
                                <ul class="dl-submenu">
                                    <li><a href="index-13.html">Home 13</a></li>
                                    <li><a href="index-14.html">Home 14</a></li>
                                    <li><a href="index-15.html">Home 15</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Shop</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="#">Shop Pages</a>
                                <ul class="dl-submenu">
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="shop-metro.html">Shop Metro</a></li>
                                    <li><a href="shop-masonry.html">Shop Masonry</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="lookbook.html">Look Book</a></li>
                                    <li><a href="collections.html">Collections</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Pages</a>
                                <ul class="dl-submenu">
                                    <li><a href="product-simple-01.html">Product Simple 01</a></li>
                                    <li><a href="product-simple-02.html">Product Simple 02</a></li>
                                    <li><a href="product-simple-03.html">Product Simple 03</a></li>
                                    <li><a href="product-simple-04.html">Product Simple 04</a></li>
                                    <li><a href="product-grouped.html">Product Grouped</a></li>
                                    <li><a href="product-affiliate.html">Product Affiliate</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Other Pages</a>
                                <ul class="dl-submenu">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Page</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="#">About Us</a>
                                <ul class="dl-submenu">
                                    <li><a href="about-01.html">About US 01</a></li>
                                    <li><a href="about-02.html">About US 02</a></li>
                                </ul>
                            </li>
                            <li><a href="our-services.html">Our Service</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="lookbook.html">Look Book</a></li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="#">Blog Layout</a>
                                <ul class="dl-submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                                    <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>

    </header>

    <!--====== Header Ends ======-->

    <!--====== Search Start ======-->

    <div class="search-wrapper">
        <div class="search-box">
            <a href="javascript:void(0)" class="search-close"><i class="fal fa-times"></i></a>
            <div class="search-form">
                <label>Start typing and press Enter to search</label>
                <div class="search-input">
                    <form action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--====== Search Ends ======-->

    <!--====== Off Canvas Cart Start ======-->

    <div class="off-canvas-cart-wrapper">
        <div class="off-canvas-cart-box">
            <a href="javascript:void(0)" class="cart-close"><i class="fal fa-times"></i></a>
            <div class="off-canvas-cart-content">
                <div class="cart-title">
                    <h5 class="title">Shopping Cart</h5>
                </div>
                <div class="cart-product-widget">
                    <ul>
                        <li>
                            <div class="cart-product d-flex">
                                <div class="cart-product-image">
                                    <a href="product-simple-01.html"><img src="assets/images/cart/product-1.jpg" alt="product"></a>
                                </div>
                                <div class="cart-product-content media-body">
                                    <h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
                                    <span class="price">1x <span>£150.00</span></span>
                                </div>
                                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="cart-product d-flex">
                                <div class="cart-product-image">
                                    <a href="product-simple-01.html"><img src="assets/images/cart/product-2.jpg" alt="product"></a>
                                </div>
                                <div class="cart-product-content media-body">
                                    <h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
                                    <span class="price">1x <span>£150.00</span></span>
                                </div>
                                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="cart-product d-flex">
                                <div class="cart-product-image">
                                    <a href="product-simple-01.html"><img src="assets/images/cart/product-3.jpg" alt="product"></a>
                                </div>
                                <div class="cart-product-content media-body">
                                    <h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
                                    <span class="price">1x <span>£150.00</span></span>
                                </div>
                                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
                            </div>
                        </li>
                    </ul>   
                    <div class="cart-product-total">
                        <p class="value">Subtotal</p>
                        <p class="price">£600.00</p>
                    </div>           
                    <div class="cart-product-btn">
                        <a href="#" class="main-btn btn-block">View cart</a>
                        <a href="#" class="main-btn btn-block">Checkout</a>
                    </div>           
                </div>
            </div>
        </div>
    </div>

    <!--====== Off Canvas Cart Ends ======-->

    <!--====== Off Canvas Sidebar Start ======-->

    <div class="off-canvas-sidebar">
        <div class="off-canvas-sidebar-wrapper">
            <a class="sidebar-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
            <div class="off-canvas-sidebar-box">
                <a class="logo" href="index.html">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </a>
                <p class="text">Curabitur placerat urna augue, id luctus sem imperdiet id. Nunc congue ac libero ut lacinia. In ultrices elementum ipsum, in tempus enim accumsan..</p>
                <ul class="sidebar-social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <div class="sidebar-image">
                    <img src="assets/images/aside-image.jpg" alt="">
                </div>
                <ul class="sidebar-info">
                    <li>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <p><a href="tel:61292515600">+612 9251 5600</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <p><a href="mailto://info@hasthemes.com">info@hasthemes.com</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="single-info">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <p class="copyright">&copy; Copyright 2020 Created  <a href="https://hasthemes.com/">HasThemes</a></p>
            </div>
        </div>
    </div>

    <!--====== Off Canvas Sidebar Ends ======-->

    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">FAQs</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">FAQs</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Faqs Start ======-->

    <section class="faqs-page pt-50 pb-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Lorem ipsum dolor sit amet ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Nunc tincidunt massa sem ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Sed id ornare augue, nec tempus ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Itae elementum dui luctus ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Vestibulum ante ipsum primis ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Aenean ac nulla tincidunt ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Faqs Ends ======-->

    <!--====== Faqs Start ======-->

    <section class="faqs-page faqs-bg pt-50 pb-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Lorem ipsum dolor sit amet ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Nunc tincidunt massa sem ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Sed id ornare augue, nec tempus ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Itae elementum dui luctus ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Vestibulum ante ipsum primis ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-faqs mt-50">
                        <h4 class="title">Aenean ac nulla tincidunt ?</h4>
                        <p>Vivamus feugiat, eros pretium porta porttitor, tortor ligula venenatis elit, ac porta turpis neque ut neque. In condimentum massa lacus, rutrum sollicitudin ligula lobortis ac. Aenean interdum accumsan leo, quis convallis nisi sagittis ac. Suspendisse malesuada</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Faqs Ends ======-->

    <!--====== Call to Action Start ======-->

    <section class="call-to-action pt-30 pb-80">
        <div class="container">
            <div class="call-to-action-wrapper">
                <div class="call-to-action-content mt-50">
                    <h4 class="title">If you have another questions</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="call-to-action-btn mt-50">
                    <a href="#" class="main-btn">Contact</a>
                </div>
            </div>
        </div>
    </section>

    <!--====== Call to Action Ends ======-->

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
