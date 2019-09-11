<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 100;
		function start()
		{
			a += 1;
			document.getElementById("msg").innerHTML=a;
			setTimeout("start()", 100);
		}
	</script>
</head>
<body>
<button onclick="start()">Start</button>
<h1 id="msg">100</h1>
</body>
</html>