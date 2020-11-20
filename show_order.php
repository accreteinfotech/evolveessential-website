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
			<th>Heavy Flow</th>
			<th>Light Flow</th>	 	 	 	
			<th>Total</th>	
		</tr>
    	</thead>
        <tbody>
           <?php
			$sql=$link->rawQuery("select op.*,oi.*,p.product_id,p.product_name,p.product_code,p.product_gst,p.product_image,p.product_price,p.product_alias,p.product_gst,p.product_shipping_charge from order_product op,order_item oi,product p where op.order_product_id=oi.order_product_id and oi.product_id=p.product_id and op.order_product_id=?",array($_REQUEST['oid']));
			if($sql)
			{
				$gst_amount=0;
				$shipping_amount=0;
				$gst=0;
				foreach($sql as $cat)
				{
					?>
					<tr>
						<td><a target="_blank" href="<?php echo $site_url."Product-Detail/".$cat['product_alias']; ?>"><img style="height: 50px;width: 50px;"  src="backyard/images/product_image/<?php echo $cat['product_image']; ?>"></a></td>
						<td><?php echo $cat['product_name']; ?></td>
						<td><?php echo $cat['heavy_flow']; ?></td>
						<td><?php echo $cat['light_flow']; ?></td>
						<td><span>INR </span><span><?php echo sprintf("%.2f", $product_total=$cat['price']); ?></td>
								
					</tr>
					<?php
				}
				if($cat['order_total']!=0)
				{
				?>
					<tr style="text-align:left;background-color:#f6f6f6">
						<td colspan="7" style="text-align:left;">Shipping Charge</td>
						<td><?php echo $cat['order_currency']; ?><span> <?php echo sprintf("%.2f",$shipping_amount); ?></span></td>
					</tr>
					<tr style="text-align:left;background-color:#f6f6f6">
						<td colspan="7" style="text-align:left;">Total</td>
						<td><?php echo $cat['order_currency']; ?><span> <?php echo sprintf("%.2f",$cat['order_total']); ?></span></td>
					</tr>
					<?php
				}
			}
		?>
        </tbody>
    <?php
?>