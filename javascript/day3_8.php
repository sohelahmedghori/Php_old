<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.small_img{
			border:1px solid #000;
			padding: 5px;
			border-radius: 5px;
		}
	</style>
	<script type="text/javascript">
		function demo(a)
		{
			document.getElementById("main_img").setAttribute("src", a);
		}
	</script>
</head>
<body>
<div style="margin: 20px auto; width: 600px; height: 550px; border:1px solid #CCC; text-align: center;">
	<img id="main_img" src="1.jpeg" height="400" width="400">
	<Hr />
	<img src="1.jpeg" class="small_img" onmouseover="demo('1.jpeg')" height="100" width="100">
	<img src="2.jpeg" class="small_img" onmouseover="demo('2.jpeg')" height="100" width="100">
	<img src="3.jpeg" class="small_img" onmouseover="demo('3.jpeg')" height="100" width="100">
	<img src="4.jpeg" class="small_img" onmouseover="demo('4.jpeg')" height="100" width="100">
</div>
</body>
</html>