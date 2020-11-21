<!doctype html>
<html lang="en">

<?php
	session_start();
	if(!isset($_SESSION['admin_id']))
	{
		header("location:../index.php");
	}
	include '../include/connect.php';
	//$oid="16";
	$oid=$_REQUEST['oid'];
	$mysql=$link->rawQueryOne("select * from order_product op where op.order_product_id=? ",array($oid));
				
?>
<head>
	<base href="<?php echo $site_url; ?>/backyard/order/">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $project_name; ?> | View Invoice Details</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="../css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="../style.css">
<script type="text/javascript">
function confirmationDelete(anchor)
{
   var conf = confirm('Are You Sure Want To Delete ?');
   if(conf)
      window.location=anchor.attr("href");
}

</script>
<style>
#inventory-invoice{
    padding: 30px;
}
#inventory-invoice a{text-decoration:none ! important;}
.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #f78050
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #f78050
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #f78050
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th{
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px;
    border:1px solid #fff;
}
.invoice table td{
    border:1px solid #fff;
}
.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #f78050;
    font-size: 1.2em
}

.invoice table .tax,.invoice table .total,.invoice table .unit {
    text-align: center;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #f78050
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #f78050;
    color: #fff
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #f78050;
    font-size: 1.4em;
    border-top: 1px solid #f78050
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
</head>

<body>
    <!-- Preloader -->
   <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <?php
			include '../include/side_menu.php';
		?>

        <!-- Page Content -->
        <div id="changemp" class="ecaps-page-content">
            <!-- Top Header Area -->
            <?php
				include '../include/header.php';
			?>
			
            <div class="main-content">
                <div id="inventory-invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
         </div>
        <hr>
    </div>
    <div class="invoice overflow-auto" id='DivIdToPrint'>
	
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                            <img src="../img/core-img/logo.png" style="height:120px; width:120px;">
                    </div>
                    <div class="col company-details">
                        <h2 class="name" style="color:#f78050">
                            Evolve Essential
                        </h2>
                        <!--<div>Shed no. 96, Road no. 6, Udhna udhyog nagar, New functional estate, Udhna, Surat-394210</div>-->
                        <!--<div>+91 93138-01754</div>
                        <div>info@waxberry.in</div>-->
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to"><?php echo $mysql['full_name']; ?></h2>
                        <div class="address"><?php echo $mysql['order_add1'].$mysql['order_add2']; ?></div>
                        <div class="email"><a style="color:#f78050" href="mailto:<?php echo $mysql['order_mail']; ?>"><?php echo $mysql['order_mail']; ?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE <?php echo $mysql['order_product_id']; ?></h1>
                        <div class="date">Date of Invoice:<?php echo date('d/m/Y',strtotime($mysql['order_date_time'])); ?></div>
                        <div class="date">Due Date: <?php echo date('d/m/Y',strtotime($mysql['order_date_time'])); ?></div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>SR NO.</th>
                            <th>Product</th>
							<th>Medium Flow</th>
							<th>Heavy Flow</th>
							<th style="text-align:center;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$sql=$link->rawQuery("select op.*,oi.*,p.product_id,p.product_name,p.product_image,p.product_price from order_product op,order_item oi,product p where op.order_product_id=oi.order_product_id and oi.product_id=p.product_id and op.order_product_id=?",array($oid));
					//$cat=$link->rawQuery("select * from order_product op ,status s where s.status_id=op.status_id and op.is_active='1' and op.order_product_id=? group by op.order_product_id order by op.order_product_id desc",array($oid));
					if($link->count > 0)
					{
						$i=1;
						$product_org_price=0;
						$gst_amount=0;
						$shipping_amount=0;
						$gst=0;
						foreach($sql as $cat)
						{
							$product_org_price=$product_org_price+$cat['product_price'];
							?>
							<tr>
								<td class="no"><?php echo $i; ?></td>
								<td class="text-left"><h3><?php echo $cat['product_name']; ?></h3></td>
								<td class="unit"><?php echo $cat['light_flow']; ?></td>
								<td class="unit"><?php echo $cat['heavy_flow']; ?></td>
								<td class="tax">INR <?php echo " ".sprintf("%.2f",$cat['price']); ?></td>
							</tr>
							<?php
							//$sub=$sub+$cat['price'];
							//$ship=$ship+$cat['shiping_charge']*$cat['qty'];
							$i++;
						}
					}
					?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <?php
							if($link->count > 1)
							{
								?>
								<td>
									<del>INR <?php echo sprintf("%.2f", $product_org_price) ; ?></del> INR <?php echo sprintf("%.2f",$cat['order_total']); ?>
								</td>
								<?php
							}
							else
							{
								?>
								<td>
									INR <?php echo sprintf("%.2f",$cat['order_total']); ?>
								</td>
								<?php
							}
						?>
                        </tr>
                        <tr>
							<td colspan="2"></td>
							<td colspan="2">SHIPPING CHARGE</td>
							<?php
								if($shipping_amount == 0)
								{
							?>
								<td>Free</td>
							<?php
								}
								else
								{
							?>
								<td>INR <span> <?php echo sprintf("%.2f",$shipping_amount); ?></span></td>
							<?php
								}
							?>
						</tr>
                        <?php
					//		if($mysql['order_product_type']== "cash")
					//		{
								?>
									<!--<tr>
									    <td colspan="2"></td>
										<td colspan="2">COD Charge</td>
										<td>₹ <?php //echo sprintf("%.2f", 50); ?></td>
									</tr>-->
								<?php
					//		}
						?>
						<?php
						/*	if($mysql['coupon_id']!= 0)
							{
							    $coupon=$link->rawQueryOne("select * from coupon where coupon_id=?",array($mysql['coupon_id']));*/
								?>
									<!--<tr>
										<td colspan="2"></td>
										<td colspan="2"><?php echo $coupon['coupon_name']; ?></td>
										<td>- ₹ <?php echo sprintf("%.2f", $sub*$coupon['coupon_discount']/100); ?></td>
									</tr>-->
								<?php
						//	}
						?>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>₹ <?php echo sprintf("%.2f", $mysql['order_total']); ?></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">System Generated Invoice.</div>
                </div>
            </main>
            <footer style="padding:20px;">
                Invoice was generated on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <div></div>
    </div>
</div>
            
            </div>
            </div>
            </div>
       

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="../js/jquery.min.js"></script>
	<script>
	 $('#printInvoice').click(function(){
		Popup($('.invoice')[0].outerHTML);
		function Popup(data) 
		{
			$("#printInvoice").css("display","none");
			$("#sidebar").css("display","none");
			$("#header").css("visibility","hidden");
			$("#changemp").css("margin-left","0px");
			$("#changemp").css("padding-top","0px");
			window.print();
			return true;
		}
		$("#printInvoice").css("display","inline-block");
		$("#changemp").css("margin-left","220px");
		$("#changemp").css("padding-top","70px");
		$("#sidebar").css("display","inline-block");
		$("#header").css("visibility","visible");
	});
	
	</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bundle.js"></script>

    <!-- Active JS -->
    <script src="../js/default-assets/fullscreen.js"></script>
    <script src="../js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="../js/default-assets/jquery.datatables.min.js"></script>
    <script src="../js/default-assets/datatables.bootstrap4.js"></script>
    <script src="../js/default-assets/datatable-responsive.min.js"></script>
    <script src="../js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="../js/default-assets/datatable-button.min.js"></script>
    <script src="../js/default-assets/button.bootstrap4.min.js"></script>
    <script src="../js/default-assets/button.html5.min.js"></script>
    <script src="../js/default-assets/button.flash.min.js"></script>
    <script src="../js/default-assets/button.print.min.js"></script>
    <script src="../js/default-assets/datatables.keytable.min.js"></script>
    <script src="../js/default-assets/datatables.select.min.js"></script>
    <script src="../js/default-assets/demo.datatable-init.js"></script>
    <script src="../js/default-assets/dashboard-chat.js"></script>

</body>

</html>