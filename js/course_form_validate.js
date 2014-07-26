
			
jQuery(function($){
	//alert("AB");
	$('#add_course').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			courseid:{
				required:true,
				minlength:4
			},
			coursename: {
				required: true,
				minlength: 1
			},
			noc: {
				required: true,				
			},
			desc: {
				required: true				
			}
		},

		messages: {
			courseid: {
				required: "Please provide course ID.",
				minlength: "Please enter minimum 4 characters in course ID."
			},
			coursename: {
				required: "Please specify a course name.",
				minlength: "Please enter course more than 4 characters length."
			},
			
			noc:{
				required:"Please select No. of Credits.",			
			},
			
			desc: {
				required: "Please enter the description.",				
			}
			
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#add_course .error-block').removeClass('hidden');
				$('#add_course .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#add_course .error-block').addClass('hidden');
				
			}
		},
		
		submitHandler: function(form) {
			//alert("write functionality");			
			//console.log(form.serializeArray());
			var postData=$(form).serializeArray();
			
			$('#add_course .status-block').removeClass('hidden');
			$('#add_course input,select,button').attr("disabled",true);
			//alert("AB11");
			//console.log(postData);
			$.ajax(
			{
				url : "./add_course_store.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)==="success")
					{
						window.location="./principal_mentor_viewcourses.php";
						$('#add_course').removeClass('hidden');
						$('#add_course.error-block.message').html(data);
					}
					else
					{
						$('#add_course .error-block').removeClass('hidden');
						$('#add_course .error-block .message').html(data);
					}
					//data: return data from server
					//window.location.assign("ma_login.html");
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to register due to network failure");
				}
			}).done(function()
			{
				
				$('#add_course .status-block').addClass('hidden');
				$('#add_course input,select,button').attr("disabled",false);
			
			});
		}
		
	});
	
	$("#f2 button[type='reset']").click(function()
	{
		console.log("resetting form..");
		$("#f2 .error-block").addClass('hidden');
	});
	
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
				required: "Please provide a valid userID."				
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
		    //alert("In login page");
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
					alert(data);
					if(data=="login failed" || data=="failed")
					{
						alert("sorry");
						$('#f1 .error-block').removeClass('hidden');
						$('#f1 .error-block .message').html("Login Failed.");
					}
					else if(data=="student")
					{		
						alert("student");
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					else if(data=="mentor")
					{		
						alert("mentor");
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					else if(data=="pmentor")
					{		
						alert("pmentor");
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