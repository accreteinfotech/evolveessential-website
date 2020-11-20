<?php
    ob_start();
	include 'backyard/include/connect.php';
    session_start();
    $pid=$_REQUEST['pid'];
    $p = $link->rawQueryOne("select * from product where product_alias=?",array($pid));
    if($link->count > 0){
        $ppid = $p['product_id'];
    }
    //echo $ppid;
?>
<!doctype html>
<html class="no-js" lang="en">
<?php
$sql=$link->rawQueryOne("select * from product p where p.product_alias LIKE '$pid'");
    if($link->count > 0)
    {
        $product_id=$sql['product_id'];
        $product_name=$sql['product_name'];
        $product_image=$sql['product_image'];
        $product_alias=$sql['product_alias'];
        //$product_max_qty=$sql['product_max_qty'];
        $product_code=$sql['product_code'];
        $product_price=$sql['product_price'];
		
		$product_description=$sql['product_description'];
        $additional_information=$sql['additional_information'];
        $product_short_desc=$sql['product_short_desc'];
        
        $seo_title=$sql['seo_title'];
        $seo_meta_title=$sql['seo_meta_title'];
        $seo_meta_description=$sql['seo_meta_description'];
        $seo_keywords=$sql['seo_keywords'];
        
        $product_og_title=$sql['product_og_title'];
        $product_og_description=$sql['product_og_description'];
        $product_og_url=$sql['product_og_url'];
        if($seo_title=="")
        {
            $seo_title=$product_name;
        }
    }
?>
<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <?php
    //include 'backyard/include/connect.php';
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
     .myfa-star
    {
        color:#FF912C !important;
    }    
        .star-rating .fa-star{color: yellow;}
	.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.myactive
{
	 border: solid 2px #131212;
	 content: '\f00c'; 
     font-family: 'FontAwesome', sans-serif; 
     color: #fff !important;
}
.variations .data-val input:checked + span.color::before, .variations .data-val span.color:hover::before, .variations .data-val span.color.active::before {
    content: '';
    font-family: 'FontAwesome', sans-serif;
    color: #fff;
    }

/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
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
	$current_page="product";
	  include('header.php');
	?>
    <!--====== Header Ends ======-->


    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title"><?php echo $product_alias; ?> </h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="Home">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $product_alias; ?></li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Product Simple Start ======-->

    <section class="product-simple-area pt-20">
        <div class="container">
            <div class="row">
                  <div class="col-lg-6">
                    <div class="product-simple-image flex-wrap mt-50">
                        <button class="product-gallery-popup" data-hint="Click to enlarge" data-images='[
                            {"src": "assets/images/product/product-37.jpg", "w": 600, "h": 743},
                            {"src": "assets/images/product/product-38.jpg", "w": 600, "h": 743},
                            {"src": "assets/images/product/product-25.jpg", "w": 600, "h": 743},
                            {"src": "assets/images/product/product-26.jpg", "w": 600, "h": 743}
                        ]'><i class="far fa-search-plus"></i></button>
                        <?php
							$sql=$link->rawQueryOne("select * from product where product_alias=?",array($product_alias)); 
							if($link->count > 0)
							{	
							?>
                        <div class="product-simple-preview-image">
                            <img class="product-zoom" src="backyard/images/product_image/<?php echo $cat['product_image']; ?>" alt="">
                        </div>
						<?php
							}
						?>
                        <div id="gallery_01" class="product-simple-thumb-image">
						<?php
							$sql=$link->rawQuery("select * from product_gallery pg,product p where p.product_id=pg.product_id and p.product_alias=?",array($product_alias)); 
							if($sql)
							{
								foreach($sql as $cat)
								{
									
							?>
                            <div class="single-product-thumb">
                                <a href="#" data-image="backyard/images/product_gallery_thumb_image/<?php echo $cat['product_gallery_thumb_image']; ?>">
                                    <img src="backyard/images/product_gallery_thumb_image/<?php echo $cat['product_gallery_thumb_image']; ?>" alt="">
                                </a>                                
                            </div>
						<?php
								}
							}
						?>
                            <!--<div class="single-product-thumb">
                                <a href="#" data-image="assets/images/product/product-38.jpg">
                                    <img src="assets/images/product/product-38.jpg" alt="">
                                </a> 
                            </div>
                            <div class="single-product-thumb">
                                <a href="#" data-image="assets/images/product/product-25.jpg">
                                    <img src="assets/images/product/product-25.jpg" alt="">
                                </a> 
                            </div>
                            <div class="single-product-thumb">
                                <a href="#" data-image="assets/images/product/product-26.jpg">
                                    <img src="assets/images/product/product-26.jpg" alt="">
                                </a>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-simple-details mt-50">
                        <h4 class="title"><?php echo $product_alias; ?></h4>
                     
                        <!--<p class="review">
                            <i class="fas fa-star review-on"></i>
                            <i class="fas fa-star review-on"></i>
                            <i class="fas fa-star review-on"></i>
                            <i class="fas fa-star review-on"></i>
                            <i class="fas fa-star review-on"></i>
                            <a href="#">(3 customer reviews)</a>
                        </p>-->
						
						     <div class="product-description" style="padding-bottom:30px;">
                            <p style="text-align:justify;"><?php echo $product_description; ?></p>

                            <ul class="description-list">
                                <li><?php echo $additional_information; ?></li>
                            </ul>
                        </div>

                         <h4 class="title" style="padding-bottom:30px;">Customise your pack of 15 with 2 sizes</h4>
						<div class="product-quantity-cart-wishlist-compare flex-wrap" style="border: 1px solid #000;border-bottom: none;">
						 <form action="#" style="width:100%;">
                            <div class="col-lg-12">
							 <div class="col-lg-8" style="float:left;">
							<span style="color:#ef7b4c;font-weight:700;">Mediam flow (Large)</span>
							</div>
							 <div class="col-lg-4" style="float:right;">
                                <?php

                                ?>
                                 <div class="product-quantity d-flex">
								 
                                     <button id="minus1" type="button" id="decrease" onclick="Decrease(1)" class=""><i class="fal fa-minus" ></i></button>
                                     <input type="text" name="qty" id="quantity1" value="8" min="0" onchange="qtycheck()" />
                                     <button id="plus1" type="button" id="increase" onclick="Increase(1);" class=""><i class="fal fa-plus"></i></button>
                                 </div>
                                 </div>
                               </div>
						   </form>
							</div>
						<div class="product-quantity-cart-wishlist-compare flex-wrap" style="border: 1px solid #000;">							 
							  	 <form action="#" style="width:100%;">
							    <div class="col-lg-12">
							 <div class="col-lg-8" style="float:left;">
							<span style="color:#ef7b4c;font-weight:700;">Heavy flow (XL)</span>
							</div>
							 <div class="col-lg-4" style="float:right;">
                                 <div class="product-quantity d-flex">
								 
                                     <button id="minus2" type="button" onclick="Decrease(2)"><i class="fal fa-minus"></i></button>
                                     <input type="text" name="light_flow" id="quantity2" onchange="qtycheck()" min="0" value="7" />
                                     <button id="plus2" type="button" class="" onclick="Increase(2);"><i class="fal fa-plus"></i></button>
                                 </div>
                                 </div>
                               </div> 
							</form>
                         </div>
						 
                          <div class="product-price" style="text-align:center;padding:20px;margin-top:0px;">
                            <span class="price" id="count">QTY <span id="total_qty_print">15</span>/15</span>
                        </div>
						  <div class="product-price" style="text-align:center;padding:20px;margin-top:0px;">
                            <span class="price">INR 299.00</span>
                        </div>
                     

                    
 <div class="product-cart">
                                     <button class="main-btn" id="cart" style="width:100%;">Add to Cart</button>
                                 </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Product Simple Ends ======-->

    <section class="features-area pt-60 pb-60" style="background-color: #f7f7f7;margin-top:30px;">
        <div class="container-fluid">
            <div class="row">
			<div class="col-md-1 col-sm-6">
			</div>
                <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center">
                        <i class="fal fa-truck-container"></i>
                        <h5 class="title">Acrobat premium cotton</h5>
                       
                    </div>
                </div>
				  <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center">
                        <i class="fal fa-gift"></i>
                        <h5 class="title">High absorbent, Rash free pads</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center">
                        <i class="fal fa-life-ring"></i>
                        <h5 class="title">Eco-Safe</h5>
                    </div>
                </div>
              
                <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center">
                        <i class="fal fa-user-friends"></i>
                        <h5 class="title">Nurturing the Nature in a unique way</h5>
                    </div>
                </div>
				 <div class="col-md-2 col-sm-6">
                    <div class="single-feature text-center">
                        <i class="fal fa-user-friends"></i>
                        <h5 class="title">Maintains PH balance </h5>
                    </div>
                </div>
				<div class="col-md-1 col-sm-6">
			</div>
            </div>
        </div>
    </section>
    <!--====== Product Description & Review Start ======-->

    <section class="product-description-review pt-60 pb-60">
        <div class="container">
		<?php
                    $pr=$link->rawQuery("select * from product_review pr,product p where pr.product_id=p.product_id and pr.product_id=?",array($ppid));
                     $rflag=0;
                     $review_total=0;
                     if($link->count != 0)
                     {
                           // $pr2=$link->rawQuery("select * from product_review pr,user u,product p where pr.product_id=p.product_id and u.user_id=pr.user_id and pr.product_id=?",array($_GET['pid']));
                            $review_total=$link->count; 
                     }
                    ?>
            <div class="product-simple-tab-menu">
                <ul class="nav justify-content-center">
                    <li><a class="active" data-toggle="tab" href="#review">Review (<?php echo $review_total; ?>)</a></li>
                </ul>
            </div>
            <div class="tab-content pt-30">
                
                <div class="tab-pane fade show active" id="review">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="product-review pt-20">
                                <div class="review-comment">
                                    <ul class="comment">
									<?php
                                            $pr=$link->rawQuery("select * from product_review pr,user u,product p where pr.product_id=p.product_id and u.user_id=pr.user_id and pr.product_id=? order by pr.product_review_id desc LIMIT 3",array($ppid));
                                            if($link->count > 0)
                                            {
                                                foreach($pr as $pre)
                                                {
                                                    ?>
                                        <li>
                                            <div class="single-review-comment">
                                                <div class="review-content">
                                                    <p>"<?php echo $pre['product_review_message']; ?>"</p>
                                                    <div class="review-name-rating">
                                                        <h6 class="review-name"><?php echo $pre['user_full_name']; ?></h6>
                                                        <div class="rating-stars">
                                                    <ul id='stars' style="font-size: 8px;">
                                                    <?php
                                                        $i=0;
                                                        for($j=0;$j<5;$j++)
                                                        {
                                                            if($i<$pre['product_review_rating'])
                                                            {
                                                                ?>
                                                                <li class="star"><i class="myfa-star fa fa-star"></i style="color:#FF912C;"></li>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <li class="star"><i class="myfa-star fa fa-star-o"></i></li>
                                                                <?php
                                                            }
                                                            $i++;
                                                        }
                                                    
                                                    ?>
                                                    </ul>
                                                </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
										<?php
												}
											}
											else
											{
												?>
												<p style="width:100%;text-align:center;padding-top: 15px;">No Review Found.</p>
												<?php
											}
											?>
                                    </ul>
                                </div>
								<?php
                                        if($sflag==1)
                                        {
                                ?>
                                <div class="review-form mt-45">
								<?php
									$us=$link->rawQueryOne("select * from user where user_id=?",array($_SESSION['user_id']));
									$cr = $link->rawQueryOne("select * from product_review pr,product p where p.product_id=pr.product_id and pr.product_id=? and pr.user_id=?",array($ppid,$_SESSION['user_id']));
									if($link->count > 0)
									{

									?>
									<p style="width:100%;text-align:center;padding-top: 15px;">Already Reviewed.</p>
									<?php
									}
									else
									{
									?>
                                    <h2 class="form-title" style="margin-bottom: 13px;">Add a review </h2>

                                    <form action="#" id="rview" method="post">
										<input type="hidden" name="uid" value="<?php echo $_SESSION['user_id']; ?>">
                                        <input type="hidden" name="pid" value="<?php echo $ppid; ?>">
                                        <div class='rating-stars'>
										<ul id='stars' style="font-size: 8px;">
										  <li class='star' title='Poor' data-value='1'>
											<i class='fa fa-star fa-fw'></i>
										  </li>
										  <li class='star' title='Fair' data-value='2'>
											<i class='fa fa-star fa-fw'></i>
										  </li>
										  <li class='star' title='Good' data-value='3'>
											<i class='fa fa-star fa-fw'></i>
										  </li>
										  <li class='star' title='Excellent' data-value='4'>
											<i class='fa fa-star fa-fw'></i>
										  </li>
										  <li class='star' title='WOW!!!' data-value='5'>
											<i class='fa fa-star fa-fw'></i>
										  </li>
										</ul>
										</div>
										<input type="hidden" name="product_review_rating" class="rating-value" value="3">
										<div class="single-form">
											<label>Name *</label>
											<input type="text" name="contact_name" id="contact_name" value="<?php echo $us['user_full_name']; ?>" disabled>
										</div>
										<div class="single-form">
											<label>Email *</label>
											<input type="email" name="contact_email" id="contact_email" value="<?php echo $us['user_email']; ?>" disabled>
										</div>
                                        <div class="single-form">
                                            <label>Your Review *</label>
                                            <textarea name="product_review_message" id="product_review_message"></textarea>
                                        </div>
                                        <div class="review-btn">
                                            <input type="submit" name="submit" value="Submit" class="main-btn">
                                        </div>
                                    </form>
									<?php
									}
									?>
                                </div>
								<?php
										}
										?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Product Description & Review Ends ======-->

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

    <!--====== Photo Swipe Start ======-->

    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="pswp__bg"></div>

        <div class="pswp__scroll-wrap">
            
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>
        </div>
    </div>

    <!--====== Photo Swipe Ends ======-->

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

    <!-- <script src="assets/js/plugins/parallax.min.js"></script>  -->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <script src="assets/js/plugins.min.js"></script>

    
    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="assets/js/map-script.js"></script>
	<script>
    function Increase(id){
        var y = document.getElementById('quantity'+id).value;//lay gia tri cu trong text
        var max = parseInt(15);
            if(y < parseInt(max, 10))
            {
                document.getElementById("quantity"+id).value = parseInt(y, 10) +1;// + gia tri lay dc len 1 roi gan kq vao o text
                var qty1=$("#quantity1").val();
            var qty2=$("#quantity2").val();
            var final_qty=parseInt(qty1)+parseInt(qty2);
           // alert(final_qty);
           $("#total_qty_print").html(final_qty);
           if(final_qty ==15)
           {
                $("#cart").attr('disabled',false);
                $("#cart").css('cursor','pointer');  
                $("#count").css('color','green');
           }
           else
           {
                $("#cart").attr('disabled',true);
                $("#count").css('color','red');
                $("#cart").css('cursor','not-allowed');
           }
            if(final_qty >= 15)
            {
                $("#plus1").attr('disabled',true);
                $("#plus2").attr('disabled',true);
            }
            else
            {
                $("#plus1").attr('disabled',false);
                $("#plus2").attr('disabled',false);   
            }
                }
            
            //alert(max);
    }
    function Decrease(id){
        var y = document.getElementById("quantity"+id).value;
        if(parseInt(y, 10) > 0)
        {
        document.getElementById("quantity"+id).value = parseInt(y, 10) -1;
            var qty1=$("#quantity1").val();
            var qty2=$("#quantity2").val();
            var final_qty=parseInt(qty1)+parseInt(qty2);
           // alert(final_qty);
           $("#total_qty_print").html(final_qty);
           if(final_qty ==15)
           {
                $("#cart").attr('disabled',false);
                $("#count").css('color','green');
                $("#cart").css('cursor','pointer');
           }
           else
           {
                $("#cart").attr('disabled',true);
                $("#count").css('color','red');
                $("#cart").css('cursor','not-allowed');
           }
            if(final_qty >= 15)
            {
                $("#plus1").attr('disabled',true);
                $("#plus2").attr('disabled',true);
            }
            else
            {
                $("#plus1").attr('disabled',false);
                $("#plus2").attr('disabled',false);   
            }
                
          }  
        //alert("go");
    }
    function qtycheck(){
         var qty1=$("#quantity1").val();
        var qty2=$("#quantity2").val();
        var final_qty=parseInt(qty1)+parseInt(qty2);
       // alert(final_qty);
       $("#total_qty_print").html(final_qty);
       if(final_qty ==15)
       {
            $("#cart").attr('disabled',false);
            $("#count").css('color','green');
            $("#cart").css('cursor','pointer');
       }
       else
       {
            $("#cart").attr('disabled',true);
            $("#count").css('color','red');
            $("#cart").css('cursor','not-allowed');
       }
        if(final_qty >= 15)
        {
            $("#plus1").attr('disabled',true);
            $("#plus2").attr('disabled',true);
        }
        else
        {
            $("#plus1").attr('disabled',false);
            $("#plus2").attr('disabled',false);   
        }
    }

    $( document ).ready(function(){
        console.log("ready");
        $("#plus1").attr('disabled',true);
        $("#plus2").attr('disabled',true);
        $("#count").css('color','green');
    });
    $(".add").click(function(){
        var qty1=$("#quantity1").val();
        var qty2=$("#quantity2").val();
        var final_qty=parseInt(qty1)+parseInt(qty2)+1;
       // alert(final_qty);
       $("#total_qty_print").html(final_qty);
       if(final_qty ==15)
       {
            $("#cart").attr('disabled',false);
            $("#count").css('color','green');
       }
       else
       {
            $("#cart").attr('disabled',true);
            $("#count").css('color','red');
       }
        if(final_qty >= 15)
        {
            $("#plus1").attr('disabled',true);
            $("#plus2").attr('disabled',true);
        }
        else
        {
            $("#plus1").attr('disabled',false);
            $("#plus2").attr('disabled',false);   
        }
    });
    $(".sub").click(function(){
        var qty1=$("#quantity1").val();
        var qty2=$("#quantity2").val();
        var final_qty=parseInt(qty1)+parseInt(qty2)-1;
        //alert(final_qty);
        $("#total_qty_print").html(final_qty);
        if(final_qty ==15)
       {
            $("#cart").attr('disabled',false);
            $("#count").css('color','green');
       }
       else
       {
            $("#cart").attr('disabled',true);
            $("#count").css('color','red');
       }
        if(final_qty >= 15)
        {
           $("#plus1").attr('disabled',true);
            $("#plus2").attr('disabled',true);
        }
        else
        {
            $("#plus1").attr('disabled',false);
            $("#plus2").attr('disabled',false);      
        }
    });
	$("#rview").submit(function(e) {
		//alert("Hello");
        $.ajax({
           type: "POST",
           url: "insert_review.php",
           data: $("#rview").serialize(),
                
                // serializes the form's elements.
           success: function(data)
           {
                if(data == '')
                {
                     location.reload(true); 
                }
                else
                {
                    $("#rerror").html(data);
                    $("#rerror").css("color","red");
                }
           }
        });
        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
    $(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
   //alert(ratingValue);
    $(".rating-value").val(ratingValue);
  });
  
  
});
	</script>
    
</body>

</html>
