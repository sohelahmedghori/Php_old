<!DOCTYPE html>
<html>
<head>
	<title>Auto Fill</title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("fn").value;

			document.getElementById("sn").value=a;
		}
	</script>
</head>
<body>
<h1>Name : </h1><input type="text" id="fn">
<button onclick="demo()">Copy</button>
<h1>Copy Name : </h1><input type="text" id="sn">
</body>
</html>