<?php
    ob_start();
?>
<?php
	
    include 'backyard/include/connect.php';
    session_start();
    $oid=$_REQUEST['oid'];
    ?>
        <thead>
    	<tr style="background-color:#f6f6f6">
			<th>Product</th>
			<th>Name</th>
			<th>Medium Flow</th>
			<th>Heavy Flow</th>
			<th>Total</th>	
		</tr>
    	</thead>
        <tbody>
           <?php
			$sql=$link->rawQuery("select op.*,oi.*,p.product_id,p.product_name,p.product_code,p.product_gst,p.product_image,p.product_price,p.product_alias,p.product_gst,p.product_shipping_charge from order_product op,order_item oi,product p where op.order_product_id=oi.order_product_id and oi.product_id=p.product_id and op.order_product_id=?",array($_REQUEST['oid']));
			if($link->count > 0)
			{
				$product_org_price=0;
				$gst_amount=0;
				$shipping_amount=0;
				$gst=0;
				foreach($sql as $cat)
				{
					$product_org_price=$product_org_price+$cat['product_price'];
					?>
					<tr>
						<td style="padding:15px;"><a target="_blank" href="<?php echo $site_url."Product-Detail/".$cat['product_alias']; ?>"><img style="height: 50px;width: 50px;"  src="backyard/images/product_image/<?php echo $cat['product_image']; ?>"></a></td>
						<td style="padding:15px;"><?php echo $cat['product_name']; ?></td>
						<td style="padding:15px;"><?php echo $cat['light_flow']; ?></td>
						<td style="padding:15px;"><?php echo $cat['heavy_flow']; ?></td>
						<td style="padding:15px;">INR <?php echo " ".sprintf("%.2f", $product_total=$cat['price']); ?></td>
								
					</tr>
					<?php
				}
				if($cat['order_total']!=0)
				{
				?>
					<tr>
						<td colspan="4" style="text-align:left; padding:15px;">Shipping Charge</td>
						<?php
						if($shipping_amount == 0){
							?>
						<td>Free</td>
						<?php
						}
						else{
							?>
							<td>INR <span> <?php echo sprintf("%.2f",$shipping_amount); ?></span></td>
							<?php
								}
							?>
						
					</tr>
					<tr>
						<td colspan="4" style="text-align:left; padding:15px;">Total</td>
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
					<?php
				}
			}
		?>
        </tbody>
    <?php
?>