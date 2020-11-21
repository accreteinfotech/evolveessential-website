   <style>
   .header-navbar-white.is-sticky .header-menu .main-menu>li.active>a, .header-navbar-white.is-sticky .header-menu .main-menu>li:hover>a {
    color: #232324 !important; 
}
.header-navbar-white.is-sticky .header-menu .main-menu>li>a {
    color: #232324 !important;
}	
.header-navbar-white.is-sticky .header-meta .meta li a {
    color: #232324 !important;
}
.header-navbar-white.is-sticky .header-meta .meta li a.sidebar-toggle {
    background-color: #232324;
    color: #fff !important;
}
   </style>
   <header class="header-area">
	 <?php
    if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=null)
    {
        $uid=$_SESSION['user_id'];
        $sflag=1;
    }
    else
    {
        $uid=session_id();  
        $sflag=0;
    }
	?>
        <div class="header-navbar header-navbar-white">
            <div class="container-fluid custom-container">
                <div class="header-wrapper d-flex justify-content-between align-items-center">

                    <div class="header-logo">
                        <a href="Home">
                            <img src="assets/images/logo-white.png" alt="Logo">
                        </a>
                    </div>

                    <div class="header-menu site-nav d-none d-lg-block">
                        <ul class="main-menu">
						<?php
							if($current_page == "home1")
							{
								?>
								<li class="<?php if ($current_page=="home") {echo "active"; }?>">
                                <a style="color:#fff;" href="Home">Home</a>
								</li>
								<li class="<?php if ($current_page=="about") {echo "active"; }?>"><a style="color:#fff;" href="About">About us</a></li>
								<?php
								$sql=$link->rawQuery("select * from product where is_active1 = 1 and product_delete = 0");
								if($link->count > 0)
								{
									foreach($sql as $cat)
									{
									?>
								<li class="<?php if ($current_page=="product") {echo "active"; }?>"><a style="color:#fff;" href="Product/<?php echo $cat['product_alias'] ?>"><?php echo $cat['product_alias'] ?></a></li>
								<?php
									}
								}
								?>
								<li class="<?php if ($current_page=="how_it_works") {echo "active"; }?>"><a style="color:#fff;" href="how-it-works.php">How It Works</a></li>
								<li class="<?php if ($current_page=="blogs") {echo "active"; }?>"><a style="color:#fff;" href="Blogs">Blogs</a></li>
								<li class="<?php if ($current_page=="contact_us") {echo "active"; }?>"><a style="color:#fff;" href="Contact-us">Contact Us</a></li>
							   
								<?php
							}
							else
							{
								?>
								<li class="<?php if ($current_page=="home") {echo "active"; }?>">
                                <a href="Home">Home</a>
								</li>
								<li class="<?php if ($current_page=="about") {echo "active"; }?>"><a href="About">About us</a></li>
								<?php
								$sql=$link->rawQuery("select * from product where is_active1 = 1 and product_delete = 0");
								if($link->count > 0)
								{
									foreach($sql as $cat)
									{
									?>
								<li class="<?php if ($current_page=="product") {echo "active"; }?>"><a href="Product/<?php echo $cat['product_alias'] ?>"><?php echo $cat['product_alias'] ?></a></li>
								<?php
									}
								}
								?>
								<li class="<?php if ($current_page=="how_it_works") {echo "active"; }?>"><a href="how-it-works.php">How It Works</a></li>
								<li class="<?php if ($current_page=="blogs") {echo "active"; }?>"><a href="Blogs">Blogs</a></li>
								<li class="<?php if ($current_page=="contact_us") {echo "active"; }?>"><a href="contact-us.php">Contact Us</a></li>
								<?php
							}
						?>
                            
                           <!-- <li>
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
                            </li> -->
                          
                        </ul>
                    </div>

                    <div class="header-meta">
						<?php
							if($current_page == "home1")
							{
								?>
								<ul class="meta">
									<?php
										if($sflag==1)
										{
											?>
											<span><i style="color:#4cda4c;padding-right: 5px;" class="fa fa-circle" aria-hidden="true"></i><?php echo $_SESSION['user_full_name']; ?></span>
											<?php
										}
										else
										{
											?>
											<li><a class="block-link" href="login.php">
												<i class="far fa-user"></i>
											</a></li>
											<?php
										}
									?>
									<li><a class="cart-toggle" style="color:#fff;" href="javascript:void(0)"><i class="far fa-Shopping-cart"></i><span>1</span></a></li>
									<li><a class="sidebar-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a></li>
								</ul>
								<?php
							}
							else
							{
								?>
								<ul class="meta">
									<?php
										if($sflag==1)
										{
											?>
											<span><i style="color:#4cda4c;padding-right: 5px;" class="fa fa-circle" aria-hidden="true"></i><?php echo $_SESSION['user_full_name']; ?></span>
											<li><a class="block-link" href="logout.php">
												<i class="fa fa-power-off"></i>
											</a></li>
											<?php
										}
										else
										{
											?>
											<li><a class="block-link" href="login.php">
												<i class="far fa-user"></i>
											</a></li>
											<?php
										}
									?>
									
									<li><a class="cart-toggle" href="javascript:void(0)"><i class="far fa-Shopping-cart"></i>
									<span>
									<?php
										$cart=$link->rawQuery("select c.*,p.* from cart c,product p where c.product_id=p.product_id and c.user_id=? and c.order_id=0",array($uid));
										if($link->count > 0)
										{
											$cart_count = $link->count ;
											$total=0;
											$gst_amount=0;
											$shipping_amount=0;
											$gst=0;
											$grand_total=0;
											if($cart_count==1)
											{
												foreach($cart as $cart1)
												{
													$product_total=($cart1['product_price']);
													$shipping_amount=$shipping_amount+$cart1['product_shipping_charge'];
													$gst=$product_total*$cart1['product_gst']/100;
													$gst_amount=$gst_amount+$gst;
													$total=$total+$product_total;
													$grand_total=$gst_amount+$total+$shipping_amount;
												}
											}
											else
											{
												foreach($cart as $cart1)
												{
													$product_total=($cart1['product_price']-50);
													$shipping_amount=$shipping_amount+$cart1['product_shipping_charge'];
													$gst=$product_total*$cart1['product_gst']/100;
													$gst_amount=$gst_amount+$gst;
													$total=$total+$product_total;
													$grand_total=$gst_amount+$total+$shipping_amount;
												}
											}
											echo $cart_count ;
										}
										else
										{
											$cart_count=0;
											echo $cart_count ;
										}
									?>
									</span></a></li>
									
									<li><a class="sidebar-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a></li>
								</ul>
								<?php
							}
						?>
                        
                    </div>

                </div>
            </div>

            <div id="dl-menu" class="dl-menuwrapper d-lg-none">
                <button class="dl-trigger"></button>
                
                <ul class="dl-menu">
                    
                          <li class="static active">
                                <a href="index.php">Home</a>
                            </li>
						    <li><a href="about.php">About us</a></li>
							<li><a href="product.php">Products</a></li>
							<li><a href="how-it-works.php">How It Works</a></li>
							<li><a href="why-evolve.php">Why Evolve</a></li>
							<li><a href="blogs.php">Blogs</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
                           
                           <!-- <li>
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
                            </li> -->
                          
                       
                </ul>
            </div>
        </div>

    </header>
	 <!--====== Off Canvas Sidebar Start ======-->

    <div class="off-canvas-sidebar">
        <div class="off-canvas-sidebar-wrapper">
            <a class="sidebar-close" href="javascript:void(0)"><i class="fal fa-times"></i></a>
            <div class="off-canvas-sidebar-box">
                <a class="logo" href="index.php">
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
                <p class="copyright">&copy; Copyright 2020  All Right Reserved. <br/> Developed By<a href="#">Accrete InfoTech</a></p>
            </div>
        </div>
    </div>

    <!--====== Off Canvas Sidebar Ends ======-->

    <!--====== Search Start ======-->

   

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
					<?php
					$total_flag=0;
					$cart=$link->rawQuery("select c.*,p.* from cart c,product p where c.product_id=p.product_id and c.user_id=? and c.order_id=0",array($uid));
						if($link->count > 0)
						{
							$total_flag=1;
							foreach($cart as $cart1)
							{
								?>
								<li>
									<div class="cart-product d-flex">
										<div class="cart-product-image">
											<a href="Product/<?php echo $cart1['product_alias']; ?>"><img src="backyard/images/product_image/<?php echo $cart1['product_image']; ?>" alt="product"></a>
										</div>
										<div class="cart-product-content media-body">
											<h6 class="title"><a href="Product/<?php echo $cart1['product_alias']; ?>"><?php echo $cart1['product_name']; ?></a></h6>
											<span class="price" style="font-size:12px;"><?php echo $cart1['light_flow']; ?> Mediam</span>
											<span class="price" style="font-size:12px;"><?php echo $cart1['heavy_flow']; ?> Heavy</span></br>
											<span class="price"><span>INR <?php echo sprintf("%.2f", $cart1['product_price']); ?></span></span>
										</div>
										<a style="cursor:pointer;" onClick="abc1(<?php echo $cart1['cart_id']; ?>);" class="product-cancel"><i class="fal fa-times"></i></a>
									</div>
								</li>
								<?php
							}
						}
						else
						{
							?>
							<p style="text-align:center;">No Item Found</p>
							<?php
						}
					?>
                    </ul>   
					<?php
						if($total_flag!=0)
						{
							?>
							 <div class="cart-product-total">
								<p class="value">Subtotal</p>
								<p class="price">INR <?php echo sprintf("%.2f", $total) ; ?></p>
							</div>         
							 <div class="cart-product-btn">
								<a href="Cart" class="main-btn btn-block">View cart</a>
							</div>   
							<?php
						}
				  ?>
                </div>
            </div>
        </div>
    </div>

    <!--====== Off Canvas Cart Ends ======-->