<meta name="author" content="Evolve" >
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:image" content="" />
<meta name="twitter:site" content="" />
<script src="assets/js/jquery.min.js"></script>
<!-- Accrete JS -->
<script src="assets/js/accrete.js"></script>
<?php
	$google=$link->rawQueryOne("select * from seo_codes where seo_codes_id=1");
	echo $google['sco_codes_description'];
	
	$fb=$link->rawQueryOne("select * from seo_codes where seo_codes_id=2");
	echo $fb['sco_codes_description'];
	
	$tg=$link->rawQueryOne("select * from seo_codes where seo_codes_id=3");
	echo $tg['sco_codes_description'];
	
	$sconsol=$link->rawQueryOne("select * from seo_codes where seo_codes_id=4");
	echo $sconsol['sco_codes_description'];
	
?>