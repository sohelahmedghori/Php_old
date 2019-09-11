$(document).ready(function()
{
	$("#submit").click(function()
	{
		// alert();


		var a = $("#full_name").val();
		var b = $("#profile_pic").val();
		var c = $("#email").val();
		var d = $("#password").val();
		var e = $("#ree_password").val();
		var f = $("#address").val();
		var g = $("#contact").val();
		var h = $("#city").val();


		 var x = $("#male").is(":checked");
		 var y = $("#female").is(":checked");
		 var check= true;


		 if(a=="")
		 { 
		 	check =false;
          $("#full_name_msg").html("insert your name");
		 }
		 else
		 {
           $("$full_name_msg").html("");

		 }


		 if(b=="")
		 {
		 	check = false;
		 	$("#profile_pic_msg").html("insert your profile pick");
		 }
		 else
		 {
             $("#profile_pic_msg").html("");
		 }



		 if(c=="")
		 { 
		 	check =false;
		 	$("#email_msg").html("insert your email");
		 }
		 else
		 {
		 	$("#email_msg").html("");
		 }


		 if(d=="")
		 {
		 	check=false;
		 	$("#password_msg").html("insert your password");
		 }
		 else
		 {
		 	$("#password_msg").html("");
		 }


		 if(e=="")
		 { 
		 	check =false;
		 	$("#ree_password_msg").html("insert your ree password");
		 }
		 else
		 {
		 	$("#ree_password_msg").html("");
		 	if(d != e)
		 	{
		 		check =false;
		 		$("#ree_password_msg").html("password and ree password are not same");
		 	}
		 	else
		 	{
		 		$("#ree_password_msg").html("");
		 	}
		 }



		 if(f=="")
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
		 	check =false ;
            $("#contact_msg").html("insert your password");
		 }
		 else
		 {
		 	$("#contact_msg").html("");
		 }
		 if(g=="")
		 { 
		 	check = false;
		 	$("#city_msg").html("insert your city");
		 }
		 else
		 {
		 	$("#city_msg").html("");
		 }


		 if(x==false && y==false)
		 {
		 	check =false;
		 	$("#gender_msg").html("fill gender");
		 }
		 else
		 {
		 	$("#gender_msg").html("");
           }


		return check;

	});
});