$(document).ready(function(){
	$("#submit").click(function(){

		var a=$("#full").val();
		var b=$("#profile_pic").val();
		var c=$("#user").val();
		var d=$("#mobile").val();
		var e=$("#pass").val();
		var f=$("#re_pass").val();
		var g=$("#address").val();
		var h=$("#city").val();

		var x=$("#male").is(":checked");
		var y=$("#female").is(":checked");

		var check = true;

		if(a=="")
		{
			check=false;
			$("#full_name_msg").html("Insert your full name");
		}
		else
		{
			$("#full_name_msg").html("");
		}
		if(b=="")
		{
			check=false;
			$("#profile_pic_msg").html("Select your image!");
		}
		else
		{
			$("#profile_pic_msg").html("");
		}
		if(c=="")
		{
			check = false;
			$("#user_name_msg").html("Insert your username/id");
		}
		else
		{
			$("#user_name_msg").html("");
			var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(reg.test(c)==false)
			{
				check=false;
				$("#user_name_msg").html("Insert correct email_id");
			}			
			else
			{
				$("#user_name_msg").html("");
			}
		}
		if(d=="")
		{
			check = false;
			$("#mobile_msg").html("Insert your mobile no.");
		}
		else
		{
			$("#mobile_msg").html("");
			if(isNaN(d)==true)
			{
				check =false;
				$("#mobile_msg").html("Insert only number");
			}
			else
			{
				$("#mobile_msg").html("");
				if(d.length != 10)
				{
					check=false;
					$("#mobile_msg").html("Insert only 10 Digits");
				}
				else
				{
					$("#mobile_msg").html("");
				}
			}
		}
		if(e=="")
		{
			check = false;
			$("#pass_msg").html("Insert your password");
		}
		else
		{
			$("#pass_msg").html("");
		}
		if(f=="")
		{
			check = false;
			$("#re_pass_msg").html("Insert your password again!");
		}
		else
		{
			$("#re_pass_msg").html("");
			if(e != f)
			{
				check=false;
				$("#re_pass_msg").html("password and re_password are not same");
			}
			else
			{
				$("#re_pass_msg").html("");
			}
		}
		if(g=="")
		{
			check = false;
			$("#address_msg").html("Insert your address");
		}
		else
		{
			$("#address_msg").html("");
		}
		if(h=="select")
		{
			check = false;
			$("#city_msg").html("Select your city name");
		}
		else
		{
			$("#city_msg").html("");
		}
		if(x==false && y==false)
		{
			check=false;
			$("#gender_msg").html("Select gender");
		}
		else
		{
			$("#gender_msg").html("");
		}
		return check;
	});
});