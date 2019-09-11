<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #BAB029;
			/*border-radius: 100px;*/
		}
	</style>
	<script type="text/javascript">
		function show()
		{
			var a = Math.random();
			var b = a*600;
			var c = Math.floor(b);



			var x = Math.random();
			var y = x*700;
			var z = Math.floor(y);
			
			document.getElementById("box").style.marginLeft=c+"px";
			document.getElementById("box").style.marginTop=z+"px";
			document.getElementById("h").innerHTML=c;
			document.getElementById("w").innerHTML=z;
		}
	</script>
</head>
<body>
<div id="box" onmouseover="show()">
	<span id="h">0</span>
	<span id="w">0</span>
</div>
</body>
</html>