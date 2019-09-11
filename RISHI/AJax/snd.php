<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				
				var a = $("#nn").val();
				var b = $("#ff").val();

				$.ajax({

					url : "server.php",
					type : "post",
					data : {d1 : a , d2 : b}
				});
			});
		});
	</script>
</head>
<body>
	NAME<input type="text" id="nn">
	<br>
	<br>
	FEE<input type="text" id="ff">
	<br>
	<br>
	<button>SAVE</button>

</body>
</html>