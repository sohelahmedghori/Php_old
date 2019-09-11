<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("body").style.backgroundColor="red";
		}
		function demo2()
		{
			document.getElementById("box").style.backgroundColor="green";

		}
	</script>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: blue;
		}
	</style>
</head>
<body id="body">
<button onclick="demo1()" ondblclick="demo2()">OK</button>
<div id="box"></div>
</body>
</html>