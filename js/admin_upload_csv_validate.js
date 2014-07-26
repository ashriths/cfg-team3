
jQuery(function($){
//alert("hello");
	$('#uploadcsv').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			file: {
				required: true,				
			}			
		},

		messages: {
			file: {
				required: "Please select a file to upload",				
			}					
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#uploadcsv .error-block').removeClass('hidden');
				$('#uploadcsv .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#uploadcsv .error-block').addClass('hidden');
				
			}
		}		
		
	});	
	});
	