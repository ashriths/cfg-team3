
jQuery(function($){
	$('#add_student').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			rollno:{
				required: true,
				minlength: 5
			},
			studentname: {
				required: true,
				minlength: 3
			},
			fathername: {
				required: true,
				minlength: 3
			},
			stuemail: {
				required: true,
				email:	true
			},
			syearid: {
				required: true				
			},
			eyearid: {
				required: true
			},
			dob:{
					required: true
				},
				
			gender:{
						required: true
					}
		},

		messages: {
			rollno: {
				required: "Please provide a valid roll no.",
				minlength: "Please enter roll no more than 5 characters length."
			},
			
			studentname: {
				required: "Please enter your full name.",
				minlength: "Name should be more than 3 characters length."
			},
			
			fathername: {
				required: "Please enter your full name.",
				minlength: "Name should be more than 3 characters length."
			},
			syearid: {
				required: "Please select the starting year."
			},
			eyearid: {
				required: "Please select the ending year."
			},
			stuemail: {
				required: "Please provide a valid email.",
				stuemail: "Please provide a valid email."
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
				$('#add_student .error-block').removeClass('hidden');
				$('#add_student .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#add_student .error-block').addClass('hidden');
				
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
				url : "./edit_student_record.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)=="x")
					{	
						//alert("inside if");
						window.location="./admin_add_students.php";
					}
					else if($.trim(data)=="y")
					{
						alert("Unable to update");
						window.location="./admin_addstudent_form.php";
					}
					else if($.trim(data)=="invalid_email")
					{
						//alert(data);
						alert("Email already registered");
						window.location="./admin_addstudent_form.php";
					}
					else if($.trim(data)=="invalid_edit")
					{
						//alert(data);
						alert("Cannot be Edited:");
						window.location="./admin_add_students.php";
					}
					else
					{
						alert("Unable to register due to network failure");
						window.location="./admin_add_students.php";
					}						
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to register due to network failure");
				}
			}).done(function()
			{
				
				$('#add_student .status-block').addClass('hidden');
				$('#add_student input,select,button').attr("disabled",false);			
			});
		}
		
	});
	
	$("#add_student button[type='reset']").click(function()
	{
		console.log("resetting form..");
		$("#add_student .error-block").addClass('hidden');
	});
	});
	