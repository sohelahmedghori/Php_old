<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 10;
		var x="";

		function time()
		{		
			a +=1;
			document.getElementById("msg").innerHTML=a;
			x=setTimeout("time()",1000);

		}
	</script>
</head>
<body>
	<button onclick="time()">ok</button>
	<h1 id="msg"></h1>
</body>
</html>