<!DOCTYPE html>
<html>
<head>
	<title>Box Sizing Start Stop</title>
	<style type="text/css">
		#box{
			background-color: red;
			height: 50px;
			width:80px;
		}
	</style>
	<script type="text/javascript">
		var a = 50;
		var b = 80;
		var x = "";
		function start()
		{
			a += 1;
			b += 1;

			document.getElementById("box").style.height = a+"px";
			document.getElementById("box").style.width = b+"px";

			x = setTimeout("start()",20);
		}
		function stop()
		{
			clearTimeout(x);
		}
		function reset()
		{
			a = 50;
			b = 80;

			document.getElementById("box").style.height = "50px";
			document.getElementById("box").style.width = "80px";
		}
	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="stop()">Stop</button>
<button onclick="reset()">Reset</button><br><br>
<div id="box"></div>
</body>
</html>