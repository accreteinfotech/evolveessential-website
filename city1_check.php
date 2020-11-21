<?php
	include 'backyard/include/connect.php';
	session_start();
	$user_state=$_REQUEST['order_state'];
	$user_city=$_REQUEST['order_city'];
	

	$sql=$link->rawQuery("select * from cities where state_id=?",array($user_state));
	if($link->count > 0)
	{
		?>
		<option value="">Select City</option>
		<?php
		foreach ($sql as $city ) 
		{
			?>
				 
				<option value="<?php echo $city['id']; ?>" <?php if($user_city == $city['id']){echo "selected";} ?>><?php echo $city['city']; ?></option>
			<?php	# code...
		}
	}
	else
	{
		?>
		 <option value="">Select City</option>
		<option value="0">No City Found.</option>
		<?php
	}
?>