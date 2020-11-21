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
	<style>
	body .testimonial {
  padding: 100px 0;
}
body .testimonial .row .tabs {
  all: unset;
  margin-right: 50px;
  display: flex;
  flex-direction: column;
}
body .testimonial .row .tabs li {
  all: unset;
  display: block;
  position: relative;
}
body .testimonial .row .tabs li.active::before {
  position: absolute;
  content: "";
  width: 50px;
  height: 50px;
  background-color: #ef7b4c;
  border-radius: 50%;
}
body .testimonial .row .tabs li.active::after {
  position: absolute;
  content: "";
  width: 30px;
  height: 30px;
  background-color: #ef7b4c;
  border-radius: 50%;
}
body .testimonial .row .tabs li:nth-child(1) {
  align-self: flex-end;
}
body .testimonial .row .tabs li:nth-child(1)::before {
  left: 64%;
  bottom: -50px;
}
body .testimonial .row .tabs li:nth-child(1)::after {
  left: 97%;
  bottom: -81px;
}
body .testimonial .row .tabs li:nth-child(1) figure img {
  margin-left: auto;
}
body .testimonial .row .tabs li:nth-child(2) {
  align-self: flex-start;
}
body .testimonial .row .tabs li:nth-child(2)::before {
  right: -65px;
  top: 50%;
}
body .testimonial .row .tabs li:nth-child(2)::after {
  bottom: 101px;
  border-radius: 50%;
  right: -120px;
}
body .testimonial .row .tabs li:nth-child(2) figure img {
  margin-right: auto;
  max-width: 300px;
  width: 100%;
  margin-top: -50px;
}
body .testimonial .row .tabs li:nth-child(3) {
  align-self: flex-end;
}
body .testimonial .row .tabs li:nth-child(3)::before {
  right: -10px;
  top: -66%;
}
body .testimonial .row .tabs li:nth-child(3)::after {
  top: -130px;
  border-radius: 50%;
  right: -46px;
}
body .testimonial .row .tabs li:nth-child(3) figure img {
  margin-left: auto;
  margin-top: -50px;
}
body .testimonial .row .tabs li:nth-child(3):focus {
  border: 10px solid red;
}
body .testimonial .row .tabs li figure {
  position: relative;
}
body .testimonial .row .tabs li figure img {
  display: block;
}
body .testimonial .row .tabs li figure::after {
  content: "";
  position: absolute;
  top: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  border: 4px solid #dff9d9;
  border-radius: 50%;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}
body .testimonial .row .tabs li figure:hover::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
body .testimonial .row .tabs.carousel-indicators li.active figure::after {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
body .testimonial .row .carousel > h3 {
  font-size: 20px;
  line-height: 1.45;
  color: rgba(0, 0, 0, 0.5);
  font-weight: 600;
  margin-bottom: 0;
}
body .testimonial .row .carousel h1 {
  font-size: 40px;
  line-height: 1.225;
  margin-top: 23px;
  font-weight: 700;
  margin-bottom: 0;
}
body .testimonial .row .carousel .carousel-indicators {
  all: unset;
  padding-top: 43px;
  display: flex;
  list-style: none;
}
body .testimonial .row .carousel .carousel-indicators li {
  background: #000;
  background-clip: padding-box;
  height: 2px;
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper {
  margin-top: 42px;
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper p {
  font-size: 18px;
  line-height: 1.72222;
  font-weight: 500;
  color: rgba(0, 0, 0, 0.7);
}
body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper h3 {
  color: #000;
  font-weight: 700;
  margin-top: 37px;
  font-size: 20px;
  line-height: 1.45;
  text-transform: uppercase;
}

@media only screen and (max-width: 1200px) {
  body .testimonial .row .tabs {
    margin-right: 25px;
  }
}
	</style>
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
	$current_page="home";
	include('header.php');
	?>

    <!--====== Header Ends ======-->

   

    <!--====== Slider Start ======-->

    <section id="sliderParallax" class="slider-area slider-13 slider-active">
        <div class="single-slider bg_cover d-flex align-items-center paroller" style="background-image: url(assets/images/slider/slider2.jpg);" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">

                 <div class="container">
                <div class="slider-content-13-1 text-center layer" data-depth="0.2">
				 <div class="slider-title">
                        <h4 class="title"><span data-animation="slideInLeft" style="margin-top:70px;padding:0px 25px;font-size:145px;font-style: italic;color: #fff;letter-spacing:0px;" data-delay="1s">EVOLUTING</span></h4>   
                    </div>
			    </div>
            </div>
        </div>

        <div class="single-slider bg_cover d-flex align-items-center paroller" style="background-image: url(assets/images/slider/slider7.jpg);" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
             <div class="container">
                <div class="slider-content-13-1 text-center layer" data-depth="0.2">
				 <div class="slider-title">
                        <h4 class="title"><span data-animation="slideInLeft" style="margin-top:70px;padding:0px 25px;font-size:145px;font-style: italic;color: #fff;letter-spacing:0px;" data-delay="1s">EVOLVER</span></h4>   
                    </div>
			    </div>
            </div>
        </div>

        <div class="single-slider bg_cover d-flex align-items-center paroller" style="background-image: url(assets/images/slider/slider4.jpg);" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
          <div class="container">
                <div class="slider-content-13-1 text-center layer" data-depth="0.2">
				 <div class="slider-title">
                        <h4 class="title"><span data-animation="slideInLeft" style="margin-top:70px;padding:0px 25px;font-size:145px;font-style: italic;color: #fff;letter-spacing:0px;" data-delay="1s">EVOLVEMENT</span></h4>   
                    </div>
			    </div>
            </div>
        </div>
    </section>

    <!--====== Slider Ends ======-->
	<section class="why-choose-area-2 pt-80 pb-35">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title-8 text-center pb-45">
                        <h2 class="title">Our Evolution</h2>
                        <img src="assets/images/why-choose/m15-i1.png" alt="">
                        <p>Women are the better half portions of this world. We take the ‘Evolution’ of female hygiene to a place where it is connected to the ‘Eternal’ energy of earth, with biodegradable range of products thatlifts up your soulduring some dull days, with a big smile to ‘Heal you Naturally’ </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!--====== Shop Banner Start ======-->
	
	
	    <!--====== Shop Banner Start ======-->

    <section class="shop-banner-area-6 banner-section-1 d-flex align-items-center bg_cover" style="background-image: url(assets/images/Banner_1.jpg);background-position: center;
    background-repeat: no-repeat;
    background-size: auto;">
       
    </section>

    <!--====== Shop Banner Ends ======-->

    <!--====== Shop Banner Start ======-->

    <section class="shop-banner-area-6 banner-section-2 d-flex align-items-center bg_cover" style="background-image: url(assets/images/Thoughtfull_packaging.jpg);background-position: center;
    background-repeat: no-repeat;
    background-size: auto;">
        
    </section>

    <!--====== Shop Banner Ends ======-->

    <!--====== Shop Banner Start ======-->

    <section class="shop-banner-area-6 banner-section-3 d-flex align-items-center bg_cover" style="background-image: url(assets/images/3.jpg);background-position: center;
    background-repeat: no-repeat;
    background-size: auto;">
        
    </section>

    <!--====== Shop Banner Ends ======-->

    <!--====== Shop Banner Start ======-->

    <section class="shop-banner-area-6 banner-section-4 d-flex align-items-center bg_cover" style="background-image: url(assets/images/4.jpg);background-position: center;
    background-repeat: no-repeat;
    background-size: auto;">
        
    </section>

   

    <!--====== Features Start ======-->

    <section class="features-area pt- pb-30">
        <div class="container-fluid">
            <div class="row">
			<div class="col-md-1 col-sm-6">
			</div>
                <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center mt-30">
                        <i class="fal fa-truck-container"></i>
                        <h5 class="title">Acrobat premium cotton</h5>
                       
                    </div>
                </div>
				  <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center mt-30">
                        <i class="fal fa-gift"></i>
                        <h5 class="title">High absorbent, Rash free pads</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center mt-30">
                        <i class="fal fa-life-ring"></i>
                        <h5 class="title">Eco-Safe</h5>
                    </div>
                </div>
              
                <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center mt-30">
                        <i class="fal fa-user-friends"></i>
                        <h5 class="title">Nurturing the Nature in a unique way</h5>
                    </div>
                </div>
				 <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center mt-30">
                        <i class="fal fa-user-friends"></i>
                        <h5 class="title">Maintains PH balance </h5>
                    </div>
                </div>
				<div class="col-md-1 col-sm-6">
			</div>
            </div>
        </div>
    </section>

    <!--====== Features Ends ======-->
  <!--<section class="testimonial-area-3 pt-70 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title-8 text-center pb-60">
                        <h2 class="title">Testimonial</h2>
                        <p>Suspendisse placerat justo enim, a ultricie</p>
                    </div>
                </div>
            </div>
			
           <div class="row testimonial-active-3">
                <div class="col-lg-6">
                    <div class="single-testimonial-5 text-center">
                        <img src="assets/images/auhtor-2.png" alt="">
                        <p>"In convallis nulla et magna congue convallis. Donec eu nunc vel justo maximus posuere. Sed viverra nunc erat, a efficitur nibh"</p>
                        <h6 class="name">Della Williams</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial-5 text-center">
                        <img src="assets/images/auhtor-3.png" alt="">
                        <p>"In convallis nulla et magna congue convallis. Donec eu nunc vel justo maximus posuere. Sed viverra nunc erat, a efficitur nibh"</p>
                        <h6 class="name">Della Williams</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial-5 text-center">
                        <img src="assets/images/auhtor-4.png" alt="">
                        <p>"In convallis nulla et magna congue convallis. Donec eu nunc vel justo maximus posuere. Sed viverra nunc erat, a efficitur nibh"</p>
                        <h6 class="name">Della Williams</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
	<!-- eof #canvas -->
   <section class="features-area pt-60" style="background-color: #f7f7f7;padding-bottom:15px;">
		<div class="container">
					<div class="row">
					<h3 class="title" style="text-align:center;width:100%;">Support The Community</h3><br>
					<p style="text-align:center;width:100%;padding-top:25px;padding-bottom:25px;">Attain reward points on sharing it with your Menses partner!</p>
					</div>
		</div>			
      <img src="assets/images/collage-female.jpg" style="width:100%"/>
    </section>
	<!--Harsh-->
	 <section class="testimonial-area-3 bg_cover pt-80 pb-80" style="background-image: url(assets/images/m13-bg-2.jpg);">
        <div class="container-fluid custom-container">
            <div class="row testimonial-active-2">
                <div class="col-lg-4">
                    <div class="single-testimonial-3">
                        <div class="testimonial-author">
                            <img src="assets/images/auhtor-2.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"</p>
                            <h6 class="author-name">Ida Holloway</h6>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial-3">
                        <div class="testimonial-author">
                            <img src="assets/images/auhtor-3.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"</p>
                            <h6 class="author-name">Ida Holloway</h6>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial-3">
                        <div class="testimonial-author">
                            <img src="assets/images/auhtor-4.png" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"</p>
                            <h6 class="author-name">Ida Holloway</h6>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial-3">
                        <div class="testimonial-author">
                            <img src="assets/images/auhtor-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"</p>
                            <h6 class="author-name">Ida Holloway</h6>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--Harsh End-->
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
    <script>
	$(document).ready(function(){
  $(".testimonial .indicators li").click(function(){
    var i = $(this).index();
    var targetElement = $(".testimonial .tabs li");
    targetElement.eq(i).addClass('active');
    targetElement.not(targetElement[i]).removeClass('active');
            });
            $(".testimonial .tabs li").click(function(){
                var targetElement = $(".testimonial .tabs li");
                targetElement.addClass('active');
                targetElement.not($(this)).removeClass('active');
            });
        });
$(document).ready(function(){
    $(".slider .swiper-pagination span").each(function(i){
        $(this).text(i+1).prepend("0");
    });
});
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

    <script src="assets/js/plugins/parallax.min.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <script src="assets/js/plugins.min.js"></script>

    
    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="assets/js/map-script.js"></script>
    
</body>

</html>
