<style>
.footer-social .social li a 
{
    font-size: 16px;
    color:#1f1e1d !important;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
}
.footer-widget .footer-title
{
    font-size: 14px;
    letter-spacing: 2px;
    font-weight: 700;
    color: #1f1e1d;
    text-transform: uppercase;
}
.footer-link .link li a 
{
    font-size: 10px;
    color: #1f1e1d !important;
    text-transform: uppercase;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    letter-spacing: 1px;
}
</style>
<footer class="footer-area pt-50 pb-55" style="background-color:#fcbdae">
        <div class="footer-widget">
            <div class="container footer-container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo-copyright mt-30">
                            <a href="index.html">
                                <img src="assets/images/logo-white.png" alt="Logo">
                            </a>
                            <p>&copy; Copyright 2020 Evolve</p>
                        </div>
                        <div class="footer-social mt-30">
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-link-wrapper flex-wrap">
                            <div class="footer-link mt-30">
                                <h5 class="footer-title">Useful Links</h5>
                                <ul class="link">
                                    <li><a href="faqs.php">Faqs</a></li>
									<li><a href="blogs.php">Blogs</a></li>
							        <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Returns & Refunds</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="footer-link mt-30">
                                <h5 class="footer-title">Quick Links</h5>
                                <ul class="link">
                                     <li><a href="about.php">About us</a></li>
							<li><a href="product.php">Products</a></li>
							<li><a href="how-it-works.php">How It Works</a></li>
							<li><a href="why-evolve.php">Why Evolve</a></li>
							<li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="footer-link mt-30">
                                <h5 class="footer-title">Profile</h5>
                                <ul class="link">
                                    <li><a href="my-account.php">My Account</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="order-tracking.php">order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-map mt-30">
                            <div id="contact-map"></div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
		<script>
	function abc1(id)
	{
		
	$.ajax({
	   url: "remove_cart.php",
	   data: "cid="+id,
		// serializes the form's elements.
	   success: function(data)
	   {
		 location.reload(true); 
	   }
	});
	}
	</script>