$(document).ready(function (){
	$('#testForm').validate({
		rules: {
			fullName: "required"
		},
		messages :{
			fullName: 'Please enter your name'
			},

			submitHandler: function(form){
				form.submit();
			}
		}
	});
});



/*$(function(){
	$("form[name='testForm']").validate({
		//Specifying rules go here
		rules: {
			fullName: "required",
			
			phoneNumber: {
				required: true,
				maxlength: 10
			}

			age: {
				maxlength: 3
			}

			emailAddress:{
				required: true,
				email: true
			}

			gender: "required",

			comment:{
				maxlength: 250
			}

		},

	//Specifying Messages if condition is not met
		messages: {
			fullName: "Please enter full name",
			phoneNumber: "Please enter phone number",
			emailAddress: "Please enter a valid email address",
			age: "Please enter your age"
		}
	});
});*/