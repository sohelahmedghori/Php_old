<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("add").value;
			document.getElementById("show").innerHTML = a;

		}


	</script>



</head>
<body>
<input type="text" id="add"/>
<button onclick = "demo()">Go</button>
<h1 id="show"></h1>
</body>
</html>