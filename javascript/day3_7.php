<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("img").setAttribute("src", "2.jpeg");
		}
		function demo2()
		{
			document.getElementById("img").setAttribute("src", "1.jpeg");
		}
	</script>
</head>
<body>
<img src="1.jpeg" height="400" id="img" width="400" onmouseout="demo2()" onmouseover="demo1()" />
</body>
</html>