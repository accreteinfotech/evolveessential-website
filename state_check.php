<?php
	include 'backyard/include/connect.php';
	session_start();
	$user_state=$_REQUEST['order_state'];
	$user_country=$_REQUEST['order_country'];
	
 ?>
     <label for="billing_country" class="">State&nbsp;<abbr class="required" title="required">*</abbr></label>
	<span class="lynessa-input-wrapper">
    <select class="mySelect2" onchange="citycheck(this.value);" name="order_state" id="order_state">
         <?php
	$sql=$link->rawQuery("select * from states where country_id=?",array($user_country));
	if($link->count > 0)
	{
		?>
		<option value="">Select State</option>
		<?php
		foreach ($sql as $state ) 
		{
			?>
				 
				<option value="<?php echo $state['id']; ?>" <?php if($user_state == $state['id']){echo "selected";} ?>><?php echo $state['name']; ?></option>
			<?php	# code...
		}
	}
	else
	{
		?>
		<option value="0">No States Found.</option>
		<?php
	}
	?>
    </select>  
</span>