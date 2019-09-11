<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.createElement("h1");
			a.innerHTML="hello";
			document.getElementById("box").appendChild(a);
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
<div id="box"></div>
</body>
</html>