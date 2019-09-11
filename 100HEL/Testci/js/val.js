// var check=true;
$(document).ready(function() {
	var check=true;
	var check_user_avl=true;
	$("#email").blur(function(){
		var a = $(this).val();
		// alert();
		$.ajax({
			url : "checkemail.php",
			type : "post",
			data : { u : a },
			success : function(res){
				// alert(res);
				$("#email_msg").html(res);
				check_user_avl=false;
				check=false;
			}
		})
	});

	$("#submit").click(function() {
	var a=$("#fullname").val();
	var b=$("#email").val();
	var c=$("#password").val();
	var d=$("#re-password").val();
	var e=$("#profile_image").val();
	var f=$("#address").val();
	var g=$("#city").val();
	var h=$("#contact").val();

	var i=$("#male").is(":checked");
	var j=$("#female").is(":checked");

	// var check=true;

	if (a=="") 
	{
		check=false;
		$("#fullname_msg").html("Insert your Fullname");
	}
	else
	{
		$("#fullname_msg").html("");
	}
	if (b=="") 
	{
		check=false;
		$("#email_msg").html("Insert your Email");
	}
	else
	{	

		// $("#email_msg").html("");
		
		var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (reg.test(b)==false)
		{
			check=false;
			$("#email_msg").html("Insert correct Email");
		}
		else
		{
			if(check_user_avl==false)
			{
				// alert();
				check=false;
			}
			else
			{
				$("#email_msg").html("");

			}
		}
	
	}
	if (c=="")
	{
		check=false;
		$("#password_msg").html("Insert your Password");
	}
	else
	{
		$("#password_msg").html("");
	}
	if (d=="")
	{
		check=false;
		$("#re-password_msg").html("Insert your Re-password");
	}
	else
	{
		$("#re-password_msg").html("");
		if (c!=d)
		{
			check=false;
			$("#re-password_msg").html("Password and Re-password not same");
		}
		else
		{
			$("#re-password_msg").html("");	
		}
	}	
	if (e=="")
	{
		check=false;
		$("#profile_image_msg").html("Insert your profile image");
	}
	else
	{
		$("#profile_image_msg").html("");
	}
	if (f=="")
	{
		check=false;
		$("#address_msg").html("Insert your address");
	}
	else
	{
		$("#address_msg").html("");
	}

	if (g=="Select")
	{
		check=false;
		$("#city_msg").html("Select your city");
	}
	else
	{
		$("#city_msg").html("");
	}
	if (h=="")
	{
		check=false;
		$("#contact_msg").html("Insert your contact");
	}
	else
	{
		$("#contact_msg").html("");
		if(isNaN(h)==true)
		{
			check=false;
			$("#contact_msg").html("Insert Number Only");
		}
		else
		{
			$("#contact_msg").html("");
			if(h.length !=10)
			{
				check=false;
				$("#contact_msg").html("Insert 10 digits");
			}
			else
			{
				$("#contact_msg").html("");
			}
		}
	}
	if (i==false && j==false)
	{
		check=false;
		$("#gender_msg").html("Select Gender");
	}
	else
	{
		$("#gender_msg").html("");
	}
	return check;	
	});
});