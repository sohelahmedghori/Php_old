<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-10 offset-1">
			<form>
				<h1>Register Form</h1>
			<div class="form-group">
				<label for="username">Full Name</label>
				<input type="text" name="username" id="username" class="form-control" placeholder="Enter Name" autocomplete="off">
				<h6 id="usercheck"></h6>
			</div>
			<div class="form-group">
				<label for="password">Username/Email</label>
				<input type="password" name="pass" id="password" class="form-control" placeholder="Enter Password">
				<h6 id="passcheck"></h6>
			</div>
			<div class="form-group">
				<label for="con_password">Confirm Password</label>
				<input type="password" name="cpass" id="con_password" class="form-control" placeholder="Enter Password Again">
				<h6 id="conpasscheck"></h6>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-warning">
			</div>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		$("#usercheck").hide();
		$("#passcheck").hide();
		$("#conpasscheck").hide();

		var user_err = true;
		var pass_err = true;
		var conpass_err = true;

		$("#username").keyup(() =>{

			username_check();
			});

			function username_check(){
				var user_val = $("#username").val();
			if(user_val.length == '')
			{
				$("#usercheck").show();
				$("#usercheck").html("**Please fill Username");
				$("#usercheck").show();
				$("#usercheck").css("color","red");
				user_err = false;
				return false;
			}
			else{
				$("#usercheck").hide();
			}

			if((user_val.length < 3)|| (user_val.length >10))
			{
				$("#usercheck").show();
				$("#usercheck").html("Username length must be 3 and 10");
				$("#usercheck").show();
				$("#usercheck").css("color","red");
				user_err = false;
				return false;
			}
			else{
				$("#usercheck").hide();
			}
		}

		$("#password").keyup(function(){

			pass_check();
		});
		function pass_check()
		{
			var passwordstor = $("#password").val();

			if(passwordstor.length == '')
			{
				$("#passcheck").show();
				$("#passcheck").html("**Please fill Password");
				$("#passcheck").show();
				$("#passcheck").css("color","red");
				pass_err = false;
				return false;
			}
			else{
				$("#passcheck").hide();
			}

			if((passwordstor.length < 8)|| (passwordstor.length >20))
			{
				$("#passcheck").show();
				$("#passcheck").html("Username length must be 8 and 20");
				$("#passcheck").show();
				$("#passcheck").css("color","red");
				passcheck_err = false;
				return false;
			}
			else{
				$("#passcheck").hide();
			}
		}
	});

</script>
</body>
</html>