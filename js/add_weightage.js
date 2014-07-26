
jQuery(function($){
	$('#add_student').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			gen:{
				required: true,
			},
			wpc: {
				required: true,
			},
			eem: {
				required: true
			},
			q: {
				required: true
			},
			proj: {
				required: true
			}
		},

		messages: {
				gen: {
				required: "Please provide weightage for general module.",
			},
				wpc: {
				required: "Please provide weightage for weekend PC.",
			},
				eem: {
				required: "Please enter Weightage for end exam."
			},
				wpc: {
				required: "Please provide weightage for quiz.",
			},
			wpc: {
				required: "Please provide weightage for project.",
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
				url : "./add_weightage_store.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)=="success")
					{	
						//alert("inside if");
						window.location="./principal_mentor_viewcourses.php";
					}
					else if($.trim(data)=="invalid")
					{
						alert("Unable to insert");
						window.location="./principal_mentor_viewcourses.php";
					}
					else
					{
						alert("Unable to register due to network failure");
						window.location="./principal_mentor_viewcourses.php";
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
	