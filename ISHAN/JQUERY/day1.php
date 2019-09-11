<!DOCTYPE html>
<html>
<head>
	<title>Jquery Day 1</title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		#box{
			background-color:purple;
			height: 150px;
			width: 200px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				alert("Alert Appear on click");
			});
			$("#box").mouseover(function(){
				$("body").css({"background-color":"blue"});
			});
			$("#box").mouseout(function(){
				$("#box").css({"background-color":"green", "width":"500px", "height":"300px"});
			});
		});
	</script>
</head>
<body>
<button>OK</button><br><br>
<div id="box"></div>
<h1>Hello World</h1>
<h2>welcome to Jquery</h2>
</body>
</html