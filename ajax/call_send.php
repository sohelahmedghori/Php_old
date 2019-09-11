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
				
				$.ajax({
					url : "call_send_server.php",
					type : "post",
					data : { demo1 : a, demo2 : b}
				});

			});
		});
	</script>
</head>
<body>
Name <input type="Text" id="name"/>
<Br />
<Br />
Fee <input type="text" id="fee"/>
<Br />
<Br />
<button>Save</button>
</body>
</html>