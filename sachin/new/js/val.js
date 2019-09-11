$(document).ready(function()
{
	$("#submit").click(function()
	{
		alert();


		var a = $("#full_name").val();
		var b = $("#profile").val();
		var c = $("#username").val();
		var d = $("#password").val();
		var e = $("#ree_password").val();
		var f = $("#address").val();
		var g = $("#contact").val();
		var h = $("#city").val();
		 var x = $("#male)".is("chcaked");
		 var y = $("#female").is("chacked");
		 if(a=="")
		 {
          $("#full_name_msg)".html("insert your name");
		 }
		 else
		 {
           $("$full_name_msg").html("");

		 }


		return false;

	});
});