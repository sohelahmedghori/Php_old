<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #BAB120;
		}
	</style>
	<script type="text/javascript">
		var a = 100;
		var b = 100;
		var x = "";
		function start()
		{
			a += 1;
			b += 1;
			document.getElementById("box").style.width=a+"px";
			document.getElementById("box").style.height=b+"px";
			x=setTimeout("start()", 10);
			
		}
		function stop()
		{
			clearTimeout(x);
		}
		function reset()
		{
			a=100;
			b=100;
			document.getElementById("box").style.width="100px";
			document.getElementById("box").style.height="100px";
		}

		/*function hello()
		{
			alert();
			setTimeout("hello()", 1000);
		}*/


	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="stop()">Stop</button>
<button onclick="reset()">Reset</button>
<div id="box"></div>
</body>
</html>