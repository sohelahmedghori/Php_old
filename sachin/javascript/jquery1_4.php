<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 150px;
			
			width: 150px;
			background-color: red;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#box").mouseover(function(){
				// $("#box").css({"margin-left":"300px"});
				$("#box").animate({"margin-left":"800px", "height":"800px", "width":"800px"}, 1000);
				$("#box").animate({"margin-left":"0px", "height":"150px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-left":"500px", "height":"30px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-left":"0px", "height":"150px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-left":"300px", "height":"500px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-left":"0px", "height":"150px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-top":"500px", "height":"150px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-left":"0px", "height":"150px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-right":"0px", "height":"300px", "width":"3000px"}, 1000);
				// $("#box").animate({"margin-left":"0px", "height":"150px", "width":"150px"}, 1000);
				// $("#box").animate({"margin-bottom":"500px", "height":"150px", "width":"150px"}, 1000);

				// $("#box").animate({"margin-top":"300px"}, 1000);
				// $("#box").animate({"margin-left":"0px"}, 1000);
				// $("#box").animate({"margin-top":"0px"}, 1000);
			});
		});
	</script>

</head>
<body>
<div id="box"></div>
</body>
</html>