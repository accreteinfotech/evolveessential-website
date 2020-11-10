	//Product Details Page Cart Insert-Cart
	$("#login_form2").submit(function(e) {
		//alert("hello");
		$.ajax({
		   type: "POST",
		   url: "Insert-Cart",
		   data: $("#login_form2").serialize(),
				
				// serializes the form's elements.
		   success: function(data)
		   {
		       	if(data == '')
				{
					//alert(data);
					  window.location.href="Cart";
				     //location.reload(true); 
				}
				else
				{
					//$("#rerror").css("color","red");
				}
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
	
	//Process to checkout order item table insert
	function mysubmit()
	{
		//alert("Hello");
		$.ajax({
			 type: "POST",
		   url: "Insert-Order",
		   data: $("#cart_form").serialize(),
				
				// serializes the form's elements.
		   success: function(data)
		   {
			    alert(data);
		       	if(data == '')
				{
				    window.location.href='Checkout';
				}
				else
				{
				}
		   }
		});
		e.preventDefault(); 
	}

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
	function mycart(val,val3,val4,val5)
        {
            $.ajax({
			   type: "POST",
			   url: "Insert-Cart",
			   data:'pid='+val+'&qty='+1+'&price='+val3+'&color_id='+val4+'&inventory_id='+val5,
					
					// serializes the form's elements.
			   success: function(data)
			   {
				   //alert(data);
					if(data == '')
					{
						 location.reload(true); 
					}
					else
					{
						//$("#rerror").css("color","red");
					}
			   }
            		});
        }
	function myQuickWish(val,val2,val3)
	{
		$.ajax({
		   type: "POST",
		   url: "Insert-Wishlist",
		   data: "pid="+val+"&price="+val2+"&qty="+1+"&inventory_id="+val3,
				
				// serializes the form's elements.
		   success: function(data)
		   {
		   		//alert(data);
				if(data == '')
				{
					//swal("Hello world!");
					location.reload(true); 
				}
				else
				{
					//$("#rerror").css("color","red");
				}
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	}
	function removeWish(val,val2)
	{
		
		$.ajax({
		   type: "POST",
		   url: "remove_wishlist.php",
		   data: "cid="+val+"&pid="+val2,
				
		   success: function(data)
		   {
			   //alert(data);
			   if(data == "success")
			   {
					location.reload(true);   
			   }
				
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	}
	// chosen select search disable
	/*$("#mySelect").chosen({
	  "disable_search": true
	});
	$("#mySelect2").chosen({
	  "disable_search": true
	});
		$("#mySelect3").chosen({
	  "disable_search": true
	});*/
	
	// chosen select search disable
	/*$(".mySelect").chosen({
	  "disable_search": true
	});
	$(".mySelect2").chosen({
	  "disable_search": true
	});
	$(".mySelect3").chosen({
	  "disable_search": true
	});
	$('.mySelect2').trigger("chosen:updated");*/
	//Cart Qtybox +/- script
		function Increase(id){
		alert(id);
		alert('quantity'+id);
		var y = document.getElementById('quantity'+id).value;//lay gia tri cu trong text
		alert(y);
		var max = $("#quantity"+id).attr('max');
		if(parseInt(y, 10) > 0){
			if(y < parseInt(max, 10))
			{
			    document.getElementById("quantity"+id).value = parseInt(y, 10) +1;// + gia tri lay dc len 1 roi gan kq vao o text
			     updatecartcheck(parseInt(y, 10) +1);
			}
			if(y < parseInt(max, 10))
			{
				//alert("helo");
				//$("#quantity"+id).attr('disabled', true);
			}
		}
		//alert(max);
	}
	function Decrease(id){
		var y = document.getElementById("quantity"+id).value;
		var min = $("#quantity"+id).attr('min');
		if(parseInt(y, 10) > 1){
			if(y > parseInt(min, 10))
			{
			    document.getElementById("quantity"+id).value = parseInt(y, 10) -1;
			    updatecartcheck(parseInt(y, 10) -1);
			}
			if(y > parseInt(min, 10))
			{
				//$("#quantity"+id).attr('disabled', true);
			}
		}
	}
	
	//update cart functions
		function updatecart()
       {
          // alert("hello");
    		$.ajax({
    			 type: "POST",
    		   url: "Update-Cart",
    		   data: $("#cart_form").serialize(),
    				
    				// serializes the form's elements.
    		   success: function(data)
    		   {
    			   //alert(data);
    				if(data == '')
    				{
    				   location.reload(true); 
    				}
    				else
    				{
    				    alert(data);
    				}
    			
    		   }
    		});
       }
       
        function updatecartcheck(val)
	     {
	        minValue =  $(".input-number").attr('min');
	    	maxValue = $(".input-number").attr('max');
	    	//alert("gusa");
	    	if(val >= minValue && val <= maxValue)
	    	{
	    	   // alert("update Call");
	    	    updatecart();
	    	}
	     }
	//Autocomplete
	/*function currencyConvertFormSubmit(currency_to) 
//function currencyConvertFormSubmit() 
{	
	//alert(currency_to);	
		if(currency_to == 1)
		{
			currency_to="INR";
		}			
		else if(currency_to == 2)
		{
			currency_to="USD";
		}
		else if(currency_to == 3)
		{
			currency_to="EUR";
		}
		else
		{
			currency_to="INR";
		}
		$.ajax({				
			type : 'POST',
			url  : 'convert_currency.php',
			data :'currency_to='+currency_to,
			
			success : function(response){
				//alert(response);
				$(".wcml-cs-item-toggle").html(currency_to);
				location.reload(true); 
			}
		});
		return false;
}*/