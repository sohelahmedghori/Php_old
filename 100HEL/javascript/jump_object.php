<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box
		{
			height: 100px;
			width: 100px;
			border-radius: 100px;
			background-color: #89797F;
		}
	</style>
	<script type="text/javascript">
		function box()
		{
			var a=Math.random();
			var b=a*620;
			var c=Math.floor(b);

			var x=Math.random();
			var y=x*1300;
			var z=Math.floor(y);

			document.getElementById("box").style.marginTop=c+"px";
			document.getElementById("box").style.marginLeft=z+"px";
		}
	</script>
</head>
<body>
	<div id="box" onmouseover="box()"></div>
</body>
</html>