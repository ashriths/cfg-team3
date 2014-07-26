
jQuery(function($){
	//alert("12345");
	$('#add_mentor').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			mentorid:{
				required: true,
				minlength: 5
			},
			mentorname: {
				required: true,
				minlength: 3
			},
			desg: {
				required: true,
				minlength: 2
			},
			mentoremail: {
				required: true,
				email:	true
			},
			yoj: {
				required: true,
				minlength: 1
			},
			
			dob:{
					required: true
				},
				
			gender:{
						required: true
					}
			
			
		},

		messages: {
			mentorid: {
				required: "Please provide a valid Mentor ID",
				minlength: "Please enter roll no more than 5 characters length."
			},
			
			mentorname: {
				required: "Please enter your full name.",
				minlength: "Name should be more than 3 characters length."
			},
			
			desg: {
				required: "Enter designation.",
				minlength: "Designation should be more than 1 character."
			},
			
			
			mentoremail: {
				required: "Please provide a valid email.",
				stuemail: "Please provide a valid email."
			},
			
			yoj: {
				required: "Please enter Year of Joining.",
				minlength: "year id should be more than 1 characters length."
			},
			
			dob: {
				required: "Please select Date of birth."
			},

			gender: {
				required: "Please select gender."
			}
			
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#add_mentor .error-block').removeClass('hidden');
				$('#add_mentor .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#add_mentor .error-block').addClass('hidden');
				
			}
		},
	
		submitHandler: function(form) {
			//alert("AB11");
			/*form.p.value = hex_sha512(form.password.value);
			form.password.value = "";
			form.confirmPassword.value = "";
			//console.log(form.serializeArray());*/
			var postData=$(form).serializeArray();
			//alert_box("AB11");
			//console.log(postData);
			$.ajax(
			{
				url : "./edit_mentor_record.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					if($.trim(data)=="x")
					{
						window.location="./admin_add_mentors.php";
					}
					else if($.trim(data)=="invalid")
					{
						window.location="./admin_editmentor_form.php";
					}
					else if($.trim(data)=="invalid_email")
					{
						window.location="./admin_editmentor_form.php";
					}
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to register due to network failure");
				}
			}).done(function()
			{
				
				$('#add_mentor .status-block').addClass('hidden');
				$('#add_mentor input,select,button').attr("disabled",false);
			
			});
		}
		
	});
	
	$("#add_mentor button[type='reset']").click(function()
	{
		console.log("resetting form..");
		$("#add_mentor .error-block").addClass('hidden');
	});
	});
	