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
	var a = 20;
	var b = 20;
	function start()
		{
			a += 5;
			b += 5;
			document.getElementById("box").style.width=a+"px";
			document.getElementById("box").style.height=b+"px";
			x=setTimeout("start()", 1000);
			
		}</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="stop()">Stop</button>
<button onclick="reset()">Reset</button>
<div id="box"></div>
</body>
</html>