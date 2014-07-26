//alert("hello");
jQuery(function($){
	//alert("12345");
	$('#resetpwd1').validate({		
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			cpwd: {
				required: true,
				minlength: 5
			},
			npwd: {
				required: true,
				minlength: 6
			}/*,
			rnpwd: {
				equalTo:"#resetpwd1 #npwd"				
			}*/
		},
		
		messages: {
			cpwd: {			
				required: "please enter the current password sent to your mail",
				minlength: "password should be minimum 6 characters length"
			},
			npwd: {
				required: "please enter the new password",
				minlength: "password should be minimum 6 characters length"
			}/*,
			rnpwd: {
				required: "please Re-enter the new password",
				equalTo: "password's do not match"				
			}*/
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#resetpwd1 .error-block').removeClass('hidden');
				$('#resetpwd1 .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#resetpwd1 .error-block').addClass('hidden');
				
			}
		},
	
		submitHandler: function(form) {	
			form.p.value = hex_sha512(form.npwd.value);
			//alert("came");
			var postData=$(form).serializeArray();
			$.ajax(
			{
				url : "./reset_pwd_store.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)=="student")
					{		
						//alert(data);
						window.location="./student_homepage.php";
					}
					else if($.trim(data)=="mentor")
					{		
						//alert(data);
						window.location="./mentor_home.php";
					}
					else if($.trim(data)=="pmentor")
					{		
						//alert(data);
						window.location="./principal_mentor_home.php";
					}
					else if($.trim(data)=="admin")
					{		
						//alert(data);
						window.location="./admin_add_students.php";
					}
					else if($.trim(data)=="db")
					{		
						//alert("mentor");
						window.location="./resetpwd.php";
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					else if($.trim(data) =="sessionout")
					{
						window.location="index.php";	
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