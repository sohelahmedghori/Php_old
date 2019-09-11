<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input{
			height: 30px;
			width: 200px;
		}
	</style>
	<script type="text/javascript">
		var a = 200;
		function demo1()
		{
			document.getElementById("txt").style.backgroundColor="red";
		}
		function demo2()
		{
			a++;
			document.getElementById("txt").style.width=a+"px";
		}
		function demo3()
		{
			document.getElementById("txt").style.backgroundColor="green";
		}

	</script>
</head>
<body>
<input type="text" id="txt" onkeydown="demo1()" onkeypress="demo2()" onkeyup="demo3()"/>
</body>
</html>