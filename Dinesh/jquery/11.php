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
			}
			);

			$("#box").mouseover(function()
 			{
				$("body").css({"background-color":"blue"});

				});

			$("#box").mouseout(function()
               {
               	$("#box").css({"background-color":"green" ,"width":"500px"});
               	$("body").css({"background-color":"#ccc"});

               	 var a=$("h1").html();
               	 alert(a);
               }

				);
		});
	</script>

</head>
<body>
	<button>ok</button>
	<div id="box" style="height: 200px ; width:200px ; background-color:red;"></div>    
	<h1> Hello World</h1>
</body>
</html>