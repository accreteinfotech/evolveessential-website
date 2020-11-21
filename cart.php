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
	<style>
	
.item-card{
  transition:0.5s;
  cursor:pointer;
}
.item-card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.item-card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
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
    <?php 
	$current_page = 'cart';
	  include('header.php');
	?>
    <!--====== Header Start ======-->

    <!--====== Page Banner Start ======-->

    <section class="page-banner bg_cover" style="background-image: url(assets/images/page-banner-4.jpg);">
        <div class="container">
            <div class="page-banner-content text-center">
                <h2 class="title">Cart</h2>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ol>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Cart Start ======-->

    <section class="cart-page pt-80 pb-80">
        <div class="container">
		  <div class="row">
            <div class="col-lg-<?php
				if($total_flag != 0)
				{
					echo "7";
				}
				else
				{
					echo "12";
				}
					?>">
			<!--<div class="card item-card card-block" style="border: 0px">-->
            <div class="cart-table table-responsive">
			
                <table class="table">
				<form method="post" action="insert_order_item.php" name="cart_form" id="cart_form">  
                    <thead style="background-color:#ef7b4c;">
                        <tr>
                            <th class="delete" style="color:#fff;"></th>
                            <th class="product" style="color:#fff;">Product Details</th>
                            <th class="" style="color:#fff;"></th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
						$cart_item=$link->rawQuery("select * from product p,cart c where c.product_id=p.product_id and c.order_id=0");
						if($link->count > 0)
						{
							$product_org_price=0;
							foreach($cart_item as $cart1)
							{
								$product_org_price=$product_org_price+$cart1['product_price'];
								?>
								<!-- Hidden Values -->
									<input type="hidden" name="cart_id[]" value="<?php echo $cart1['cart_id'] ;?>">
									<input type="hidden" name="product_id[]" value="<?php echo $cart1['product_id']; ?>">
									<input type="hidden" name="price[]" value="<?php echo $cart1['price']; ?>">
									<input type="hidden" name="light_flow[]" value="<?php echo $cart1['light_flow']; ?>">
									<input type="hidden" name="heavy_flow[]" value="<?php echo $cart1['heavy_flow']; ?>">
								<!-- Hidden Values -->
								<tr>
									<td class="delete">
										<a class="product-delete" onClick="abc1(<?php echo $cart1['cart_id']; ?>);" style="cursor:pointer;"><i class="far fa-trash-alt"></i></a>
									</td>
									<td class="product">
										<div class="cart-product">
											<div class="product-image">
												<img src="backyard/images/product_image/<?php echo $cart1['product_image']; ?>" alt="<?php echo $cart1['product_name']; ?>">
											</div>
											<div class="product-content">
												<h5 class="title"><a href="Product/<?php echo $cart1['product_alias']; ?>"><?php echo $cart1['product_name']; ?></a></h5>
												<p class="cart-price" style="font-size:12px;"><?php echo $cart1['light_flow']; ?> Mediam, <?php echo $cart1['heavy_flow']; ?> High</p>
											</div>
										</div>
									</td>
									<td class="product">
										<span class="price"><span>INR <?php echo sprintf("%.2f", $cart1['product_price']); ?></span></span>
									</td>
								</tr>
								<?php
							}
						}
						else
						{
							?>
							<tr>
							<td colspan="3"><p style="text-align:center;padding: 20px 0px" class="product-price">No Product Found</p></td>
							</tr>
							<?php
						}
					?>
                    </tbody>
                </table>
				
				</div>
            <!--</div>-->
			
            </div>
			<?php
				if($total_flag != 0)
				{
					?>
					<div class="col-lg-5">
							  <div class="card item-card card-block mt-10" style="transform: scale(1.05);box-shadow: 5px 5px 7px rgba(0,0,0,0.2);">
							  <div class="cart-title" style="padding:15px">
									<h3 class="title" style="text-align:center;font-weight:500">Billing Details</h3>
								</div>
							 <div class="cart-total-table">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<p class="value">Subtotal</p>
												</td>
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
												<td>
													<p class="price" style="text-align:right;color:#40c13e">FREE</p>
												</td>
											</tr>
											
											<tr>
												<td>
													<p class="value" style="color:#333">Total to be Paid</p>
												</td>
												<td>
													<p class="price" style="text-align:right;color:#333" id="tot2"><?php echo "INR ".sprintf("%.2f",$grand_total) ; ?></p>
												</td>
											</tr>
										</tbody>
									</table>
								</div> 
								<div class="cart-total-btn mt-20">
									<input type="submit" style="color:#white;" class="main-btn btn-block" value="Proceed To Checkout">
								</div>
						  </div>
						  </form>
					</div>
			<?php
				}
			?>			
            </div>
            <div class="cart-btn">
                <div class="cart-btn-left">
                    <!--<a href="#" class="main-btn">Continue Shopping</a>
                    <a href="#" class="main-btn">Clear Cart</a>-->
                </div>
            </div>
        </div>
    </section>

    <!--====== Cart Ends ======-->

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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                            class="fal fa-times"></i></button>
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
                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"
                                        class="quick-wishlist"><i class="fal fa-heart"></i></a>
                                    <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Compare"
                                        class="quick-compare"><i class="fal fa-repeat-alt"></i></a>
                                </div>
                                <div class="quick-description">
                                    <p>Sed vitae eros a quam malesuada porttitor nec nec orci. Ut lacus augue, bibendum
                                        at tristique at, ornare eget quam. Donec volutpat ut nibh id sagittis. Morbi
                                        fringilla ac libero in consequat.</p>
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