	
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
				minlength: 6
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
				url : "./login-process.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)=="login failed" || data=="failed")
					{
						alert("login failed ! ! check your credentials . . ! !");
						window.location="./index.php";
					}
					else if($.trim(data)=="salts")
					{		
						//alert("salt student");
						window.location="./resetpwd.php";
					}
					else if($.trim(data)=="saltm")
					{		
						//alert("salt mentor");
						window.location="./resetpwd.php";
					}
					else if($.trim(data)=="saltp")
					{		
						//alert("salt pmentor");
						window.location="./resetpwd.php";
					}
					else if($.trim(data)=="student")
					{		
						//alert("student");
						window.location="./student_homepage.php";
					}
					else if($.trim(data)=="mentor")
					{		
						//alert("mentor");
						window.location="./mentor_home.php";
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					else if($.trim(data)=="pmentor")
					{		
						//alert("pmentor");
						window.location="./principal_mentor_home.php";
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
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