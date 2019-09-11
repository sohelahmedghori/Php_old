<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box
		{
			height: 100px;
			width: 100px;
			background-color: yellow;
		}
	</style>
	<script type="text/javascript">
		function sss()
		{	
			var a = document.getElementById("color").value;
			var b = document.getElementById("height").value;
			var c = document.getElementById("width").value;
			document.getElementById("box").style.backgroundcolor=a;
			document.getElementById("box").style.height=b+"px";
			document.getElementById("box").style.width=c+"px";
		}
	</script>
</head>
<body>
	color<input type="text" id="color">
	<br>
	height<input type="text" id="height">
	<br>
	width<input type="text" id="width">
	<br>
	<button onclick="sss()">ok</button>
	<div id="box"></div>
</body>
</html>