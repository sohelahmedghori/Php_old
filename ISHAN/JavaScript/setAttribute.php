<!DOCTYPE html>
<html>
<head>
	<title>Set Attribute</title>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById('img').setAttribute("src","3.jpg");
		}
		function demo2()
		{
			document.getElementById('img').setAttribute("src","5.jpg");
		}
	</script>
</head>
<body>
<img id="img" src="2.jpg" height="400" width="400" onmouseout="demo1()" onmouseover="demo2()">
</body>
</html>