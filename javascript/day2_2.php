<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("name").value;
			
			document.getElementById("ans").innerHTML=a;
		}
	</script>
</head>
<body>
<button onclick="demo()">OK</button>
<br />
<Br />
<input type="text" id="name"/>
<br />
<br />
<!-- <input type="text" id="ans" /> -->
<h1 id="ans"></h1>
</body>
</html>