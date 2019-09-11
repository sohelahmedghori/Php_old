$(document).ready(function(){
  $("#user_name").blur(function(){
    var a = $(this).val()
    $.ajax({
      url : "checkusername.php",
      type : "post",
      data :{u:a},
      success : function(res){
        // alert(res);
        $("#user_name_msg").html(res);
      } 
    })
  });



 $("#submit").click(function(){
 	var a = $("#full_name").val();
 	var b = $("#profile_pic").val();
 	var c = $("#user_name").val();
 	var d = $("#pass").val();
 	var e = $("#address").val();
 	var f = $("#city").val();
 	var g = $("#re_pass").val();

 	var x = $("#male").is(":checked");
 	var y = $("#female").is(":checked");

 	var check = true;

 	if(a=="")
 	{ 
 	  check  = false;
     $("#full_name_msg").html("insert your name");
 	}
 	else
 	{
     $("#full_name_msg").html("");
 	}
 	if(b=="")
 	{
 		check = false;
     $("#profile_pic_msg").html("upload your pic");
 	}
 	else
 	{
     $("#profile_pic_msg").html("");
 	}
    if(c=="")
    {
    	check=false;
     $("#user_name_msg").html("enter your email");
    }
    else
    {
      $("#user_name_msg").html("");
    }
    if(d=="")
    { 
    	check = false;
    	$("#pass_msg").html("enter your password");
    }
    else
    {
       $("#pass_msg").html("");	
    }


	if(g=="")
	{
      check = false;
      $("#re_pass_msg").html("enter your password");
	}
	else
	{
       $("#re_pass_msg").html("");
       if(d != g)
       {
       	check=false;
        $("#re_pass_msg").html("password and repassword not same");
       }
       else
       {
        $("#re_pass_msg").html("");
       }
	}


    if(e=="")
    {
    	check = false;
    	$("#address_msg").html("enter your address");
    }
    else
    {
        $("address_msg").html("");
    }
    if(f=="Select")
    {
      check = false;
      $("#city_msg").html("enter your city name");
    }
	else
	{
		$("#city_msg").html("");
	}
	if(x==false && y==false)
	{
     check= false;
     $("#gender_msg").html("select your gender");
	}
	else
	{
     $("#gender_msg").html("");
	}

    return check;
 });


});