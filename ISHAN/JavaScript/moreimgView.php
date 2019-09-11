<!DOCTYPE html>
<html>
<head>
	<title>Show More Image</title>
	<style type="text/css">
		#box{
			margin: 30px auto;
			height: 550px;
			width: 800px;
			border: 1px solid red;
			text-align: center;
		}
		.small_img{
			border: 2px solid grey;
			padding: 5px 30px; 
		}
		.main_img{
			padding: 5px;
		}
	</style>
	<script type="text/javascript">
		function demo(a)
		{
			document.getElementById('main_img').setAttribute("src",a);
		}
	</script>
</head>
<body>
<div id="box">
	<img id="main_img" src="3.jpg" height="400" width="400">
	<hr>
	<img class="small_img" src="2.jpg" height="100" width="100" onmouseover="demo('2.jpg')">
	<img class="small_img" src="4.jpeg" height="100" width="100" onmouseover="demo('4.jpeg')">
	<img class="small_img" src="5.jpg" height="100" width="100" onmouseover="demo('5.jpg')">
	<img class="small_img" src="6.png" height="100" width="100" onmouseover="demo('6.png')">
</div>
</body>
</html>