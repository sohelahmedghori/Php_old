<!DOCTYPE html>
<html>
<head><title></title><script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	 	$("button").click(function(){
	 		alert("Hello");

			});
	 		$("#box").mouseover(function(){
				$("body").css({ "background-color" : "blue"});
			});

			$("#box").mouseout(function(){
				$("#box").css({"background-color":"green", "width":"500px"});
				$("body").css({"background-color":"#FFF"});

				var a = $("h1").html();
				alert(a);




	 	});
	
	});






	</script>



</head>
<body>
<button>OK</button>
<div id="box" style="width:200px;height:200px; background-color:red;"></div>
<h1>Hello world</h1>



</body>



</htm