	
jQuery(function($){
	//alert("AB");
	$('#f1').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			uid: {
				required: true,
				minlength: 5
			},
			lpassword: {
				required: true,
				minlength: 5
			}
		},

		messages: {
			uid: {
				required: "Please provide a valid userID.",
				minlength: "User id should be more than 5 characters"
			},
			lpassword: {
				required: "Please specify a password.",
				minlength: "Password must be more than 8 characters length."
			}
			
		},
		
		showErrors: function(errorMap, errorList) {
			
			if(errorList.length!=0)
			{
				console.log(errorList);
				$('#f1 .error-block').removeClass('hidden');
				$('#f1 .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#f1 .error-block').addClass('hidden');
			}
		},
		
		invalidHandler: function (event, validator) { //display error alert on form submit   
			//$('.alert-danger', $('.f1')).show();
			$('#f1 .error-block').removeClass('hidden');
			
		},

		submitHandler: function (form) {
			//alert(form.password.value);
			form.p.value = hex_sha512(form.lpassword.value);
			//form.lpassword.value = "";
			var postData=$(form).serializeArray();
			//console.log(postData);
			$.ajax(
			{
				url : "./admin_login.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)=="login failed" || data=="failed")
					{
						alert("login failed ! ! check your credentials . . ! !");
						window.location="./admin.php";
					}
					else if($.trim(data)=="false")
					{
						alert("login failed ! ! check your credentials . . ! !");
						window.location="./admin.php";
					}
					else if($.trim(data)=="salt")
					{		
						//alert("salt admin`");
						window.location="./resetpwd.php";
					}
					else if($.trim(data)=="ok")
					{		
						//alert("admin");
						window.location="./admin_add_students.php";
					}
					//data: return data from server
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to login due to network failure");
				}
			});
		}
		
	});
	
});