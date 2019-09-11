<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{

			$("button").click(function()
			{
				alert();
			});


			$("#joy").mouseover(function()
			{
				$("body").css({ "background-color" : "blue"});
			});


			$("#joy").mouseout(function()
			{
				$("#joy").css({"background-color":"grey","height":"500px","width":"500px"});
				$("body").css({"background-color":"#FFF"});

				var a= $("h1").html();
				alert(a);
			})

		});
	</script>
</head>
<body>	
	<button>ok</button>
<div id="joy" style="height:150px; width:150px; background-color : yellow"></div>
<h1>Hello Rishabh</h1>
</body>
</html>