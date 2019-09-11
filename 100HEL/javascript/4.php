<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			background-color: red;
			height: 100px;
			width: 100px;
		}
	</style>
	<script type="text/javascript">
		function demo() 
		{
			var a=document.getElementById("color").value;
			var b=document.getElementById("h").value;
			var c=document.getElementById("w").value;
			document.getElementById('box').style.backgroundColor=a;
			document.getElementById('box').style.height=b+"px";
			document.getElementById('box').style.width=c+"px";
		}
	</script>
</head>
<body>
	Colore <input type="text" id="color">
	<br/>
	Height <input type="text" id="h">
	<br/>
	Width <input type="text" id="w">
	<br/>
	<button onclick="demo()">OK</button>
	<div id="box"></div>
</body>
</html>