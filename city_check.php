<?php
	include 'backyard/include/connect.php';
	session_start();
	$user_city=$_REQUEST['user_city'];
    ?>
      <label>City *</label>
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
    color: #232324;" name="user_city" id="user_city">
             <?php
                	$sql=$link->rawQuery("select * from cities where state_id=?",array($user_city));
                	if($link->count > 0)
                	{
                		?>
                		<option value="">Select City</option>
                		<?php
                		foreach ($sql as $city ) 
                		{
                			?>
                				<option value="<?php echo $city['id']; ?>"><?php echo $city['city']; ?></option>
                			<?php	# code...
                		}
                	}
                	else
                	{
                		?>
                		<option value="">No City Found.</option>
                		<?php
                	}
                ?>
        </select>