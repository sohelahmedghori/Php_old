$(document).ready(function()
{
	$("#sub").click(function()
		{
			var a = $("#full_name").val();
			var b = $("#username").val();
			var c = $("#password").val();
			var d = $("#ree_password").val();
			var e = $("#address").val();
			var f = $("#city").val();
			var g = $("#contact").val();
			var x = $("#male").is(":checked");
			var x = $("#female").is(":checked");
			var check = true;
			// alert(a);

			if(a=="")
			{
				check = false;
				$("#full_name_msg").html("insert your name");
			}
			else
			{
				$("#full_name_msg").html("");
			}
			if(b=="")
			{
				check = false;
				$("#username_msg").html("insert your username");
			}
			else
			{
				$("username").html("");
			}
			if(c=="")
			{
				check = false;
				$("#password_msg").html("insert your password");
			}
			else
			{


				$("#password_msg").html("");
			}
			if(d=="")
			{
				check = false;
				$("#ree_password_msg").html("insert your ree password");
			}
			else
			{
				$("#ree_password_msg").html("");
				if(c !=d)
				{
					check = false;
					$("#ree_password_msg").html("password and ree password are not match");
				}
				else
				{
					$("#ree_password_msg").html("");
				}
			}


			if(e=="")
			{
				check = false;
				$("#address_msg").html("insert your address");
			}
			else
			{
				$("#address_msg").html("");
			}





			if(f=="")
			{
				check = false;
				$("#city_msg").html("select your city");
			}
			else
			{
				$("#city_msg").html("");
			}
			if(g=="")
			{
				check = false;
				$("#contact_msg").html("insert your contact");
			}
			else
			{
				$("#contact_msg").html("");
			}
			if(x==false && y == false)
			{
				check = false;
				$("#gender_msg").html("select gender");

			}
			else
			{
				$("#gender_msg").html("");
			}


			return false;
		});

});