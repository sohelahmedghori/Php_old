<!DOCTYPE html>
<html>
<head>
	<title>Single and Double Click Event</title>
	<style type="text/css">
		#box{
			background-color: red;
			height: 200px;
			width: 300px;
		}
	</style>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById('box').style.backgroundColor="green"
		}
		function demo2()
		{
			document.getElementById('box').style.backgroundColor="purple"
		}
		function demo3()
		{
			document.getElementById('box').style.backgroundColor="pink"
		}
		function demo4()
		{
			document.getElementById('box').style.backgroundColor="red"
		}

	</script>
</head>
<body>
<button onclick="demo1()" ondblclick="demo2()">OK</button><br><br>
<div id="box" onmouseover="demo3()" onmouseout="demo4()"></div>
</body>
</html>