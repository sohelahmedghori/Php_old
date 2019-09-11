<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #ABAB12;
		}
	</style>
	<script type="text/javascript">
		var h=200;
		var w =200;
		function demo1()
		{
			document.getElementById("box").style.backgroundColor="#3624AB";
		}
		function demo2()
		{
			h++;
			w++;
			document.getElementById("box").style.height=h+"px";
			document.getElementById("box").style.width=w+"px";
		}



		function demo3()
		{
			document.getElementById("box").style.backgroundColor="#ABAB12";
			document.getElementById("box").style.height="200px";
			document.getElementById("box").style.width="200px";
			h=200;
			w=200;
		}




	</script>
</head>
<body>
<div id="box" onmousemove="demo2()" onmouseover="demo1()" onmouseout="demo3()"></div>
</body>
</html>