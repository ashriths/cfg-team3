//alert('fuck off');
jQuery(function($){
	//alert('fuck off1');
	$('.add_student').validate({
		
		rules: {
			rollno:{
				required: true,
				minlength: 5				
			}
		},

		messages: {
			rollno: {
				required: "Please provide a valid roll no.",
				minlength: "Please enter roll no more than 5 characters length."				
			}
		},
		
		submitHandler: function(form) {
			//alert("AB11");
			/*form.p.value = hex_sha512(form.password.value);
			form.password.value = "";
			form.confirmPassword.value = "";
			//console.log(form.serializeArray());*/
			var postData=$(form).serializeArray();
			
			$('#add_student .status-block').removeClass('hidden');
			$('#add_student input,select,button').attr("disabled",true);
			//console.log(postData);
			
		
		}
}
);