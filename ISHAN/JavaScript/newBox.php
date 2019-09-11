<!DOCTYPE html>
<html>
<head>
	<title>Box</title>
	<style type="text/css">
		#box{
			background-color: green;
			height: 300px;
			width: 500px;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("clr").value;
			var b = document.getElementById("h").value;
			var c = document.getElementById("w").value;
			document.getElementById("box").style.backgroundColor=a;
			document.getElementById("box").style.height=b+"px";
			document.getElementById("box").style.width=c+"px";
		}
	</script>
</head>
<body>
	<h1>Color :</h1><input type="text" id="clr">
	<h1>Height :</h1><input type="text" id="h">
	<h1>Width :</h1><input type="text" id="w"><br><br>
	<button onclick="demo()">Change</button><br><br>
	<div id="box"></div>
</body>
</html>