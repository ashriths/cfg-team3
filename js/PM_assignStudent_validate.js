jQuery(function($){
	//alert("AB");
	$('#assn_stu').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			mentid: {
				required: true				
			},
			stuid: {
				required: true				
			}
		},

		messages: {
			mentid: {
				required: "Please select MentorID."				
			},
			stuid: {
				required: "Please select at least one Student."				
			}
			
		},
		
		showErrors: function(errorMap, errorList) {
			
			if(errorList.length!=0)
			{
				console.log(errorList);
				$('#assn_stu .error-block').removeClass('hidden');
				$('#assn_stu .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#assn_stu .error-block').addClass('hidden');
			}
		},
		
		invalidHandler: function (event, validator) { //display error alert on form submit   
			//$('.alert-danger', $('.f1')).show();
			$('#assn_stu .error-block').removeClass('hidden');
			
		},

		submitHandler: function (form) {								
			var postData=$(form).serializeArray();
			//console.log(postData);
			$.ajax(
			{
				url : "./assign_student_ment_store.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if($.trim(data)=="added successfully")
					{
						//alert("added successfully");
						window.location="./principal_mentor_viewmentor.php";
					}
					else
					{
						alert("not added");
					}
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