<?php
    ob_start();
?>
<?php
	include 'backyard/include/connect.php';
	session_start();
	$user_country=$_REQUEST['user_country'];
    ?>
     <label>STATE *</label>
    <select style="width: 100%;
    height: 50px;
    padding: 0 15px;
    border: 1px solid #ebebeb;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -ms-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    font-size: 14px;
    color: #232324;" onchange="citycheck(this.value);" name="user_state" id="user_state">
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
        				 
        				<option value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
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