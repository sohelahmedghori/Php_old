<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #547585;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("color").value;
			var b = document.getElementById("h").value;
			var c = document.getElementById("w").value;
			document.getElementById("box").style.backgroundColor=a;
			document.getElementById("box").style.height=b+"px";
			document.getElementById("box").style.width=c+"px";
		}
	</script>
</head>
<body>
Color <input type="text" id="color"/>
<Br />
Height <input type="text" id="h"/>
<Br />
Width <input type="text" id="w"/>
<Br />
<button onclick="demo()">OK</button>
<div id="box"></div>
</body>
</html>