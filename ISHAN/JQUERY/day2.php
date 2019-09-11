<!DOCTYPE html>
<html>
<head>
	<title>Day 2</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				alert("hello");
			});
			$("#box").mouseover(function(){
				$("body").css("background-color" ,"pink");
			});
		});
	</script>
</head>
<body>
<button>OK</button><br><br>
<div id="box" style="background-color: red; height: 150px; width: 200px;"></div>
</body>
</html>