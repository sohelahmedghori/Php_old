<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#my
		{
			height: 100px;
			width: 100px;
			background-color: #AD1245;
		}
	</style>
	<script type="text/javascript">
		var a =100;
		var b =100;
		var x ="";
		function inc()
		{	
			a +=1;
			b +=1;
			document.getElementById("my").style.height=a+"px";
			document.getElementById("my").style.width=b+"px";
			x=setTimeout("inc()",1);

		}
		function stop()
		{
			clearTimeout(x);
		}
		function reset()
		{
			a=100;
			b=100;
			document.getElementById("my").style.height="100px";
			document.getElementById("my").style.width="100px";
		}

	</script>
</head>
<body>
	<button onclick="inc()">start</button>
	<button onclick="stop()">stop</button>
	<button onclick="reset()">reset</button>
	<div id="my"></div>
</body>
</html>