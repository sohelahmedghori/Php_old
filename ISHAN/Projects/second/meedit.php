<style type="text/css">
	.error {
		color: red;
		font-size:14px;
	}
</style>
<script type="text/javascript">
	
	var matchpassword = true;
	function matchpassword(){
		var password = $("#password").val();
		var confirmPassword = $("#confirmPassword").val();
		if(password !=" " && confirmPassword !=" ") {
			if(password != confirmPassword){
				$("#cpassworderror").html(" Please Check Confirm Password");
					matchpassword = false;

				// $("#savebtn").attr("disabled", true);
			}
			else{
				$("#cpassworderror").html("");
				// $("#savebtn").attr("disabled", false);
					matchpassword = true;
			}
		}
	}
	emailCheck = true;
	function checkValidEmail(){
		filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = $("#email").val();

		if (filter.test(email)) {
		  // Yay! valid
		 $("#emailerror").html('');
		  console.log('valid');
		  emailCheck = true;
		}
		else{
		$("#emailerror").html('Please Enter Valid Email.');
		  console.log('invalid');

			emailCheck = false;
		}
	}

		

	$('#savebtn').click(() =>{
		
		$("#nameerror").html('');
		$("#emailerror").html('');
		$("#passworderror").html('');
		$("#cpassworderror").html('');
		$("#addresserror").html('');
		$("#contacterror").html('');
		$("#cityerror").html('');
    	var name = $("#name").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var confirmPassword = $("#confirmPassword").val();
		var address = $("#address").val();
		var contact = $("#contact").val();
		var gender = $('input[type=radio][name=gender]:checked').length;
		var city = $("#city").val();

		if(name ===''|| email ===''|| password ===''||confirmPassword ===''|| address ===''|| contact ===''|| gender === 0 || city ==='')
		{
			if(name === '') {
				$("#nameerror").html('Please Enter Your Name.');
			} else {
				$("#nameerror").html('');
			}

			if(email === '') {
				$("#emailerror").html('Please Enter Email.');
			} else {
				$("#emailerror").html('');
			}
			if(password === '') {
				$("#passworderror").html('Please Enter Your password.');
			} else {
				$("#passworderror").html('');
			}
			if(confirmPassword === '') {
				$("#cpassworderror").html('Please Enter Confirm Password.');
			} else {
				$("#cpassworderror").html('');
			}
			if(address === '') {
				$("#addresserror").html('Please Enter Your address.');
			} else {
				$("#addresserror").html('');
			}
			if(contact === '') {
				$("#contacterror").html('Please Enter Your Contact.');
			} else {
				$("#contacterror").html('');
			}
			if(city === '') {
				$("#cityerror").html('Please Enter Your City.');
			} else {
				$("#cityerror").html('');
			}
			return false;
		} else if(matchpassword == false || emailCheck == false) {
			if(matchpassword == false) {
				$("#cpassworderror").html(" Please Check Confirm Password");
				return false;
			} else {
				$("#cpassworderror").html('');
			}
			if(emailCheck == false) {
				$("#emailerror").html('Please Enter Valid Email.');
				return false;
			} else {
				$("#emailerror").html('');
			}
		}
	
	});
</script>
