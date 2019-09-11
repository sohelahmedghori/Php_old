<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			var a = $("#name").val();
			var b = $("#fee").val();

			// alert(a);
			// alert(b);
			$.ajax({
				url : "call_send_server.php",
				type : "post",
				data : { name  : a, fees : b}
			}

			)
		})

	})	

	</script>
</head>
<body>
Name<input type="text" id="name"/>
<br>
<br>
Fee<input type="text" id="fee"/>
<br>
<button>Save</button>
</body>
</html>