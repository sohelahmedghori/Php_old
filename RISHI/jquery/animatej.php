<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		#kkk
		{
			background-color: black;
			height: 150px;
			width: 150px;

		}
	</style>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#kkk").mouseover(function(){
				$("#kkk").css({"background-color":"red"});
				$("#kkk").animate({"margin-left":"500px" ,"height":"300px","width":"300px"}, 1200);
				// $("#kkk").animate({"margin-left":"0px","height":"100px","width":"100px"},1600);
				$("#kkk").animate({"margin-top":"300px","height":"300px","width":"300px","background-color":"green"}, 1200);
				$("#kkk").animate({"margin-left":"0px","height":"300px","width":"300px","background-color":"pink"}, 100);
				$("#kkk").animate({"margin-top":"0px","height":"150px","width":"150px","background-color":"blue"}, 800);
			
			});
		});	
	</script>
</head>
<body>
	<div id="kkk"></div>
</body>
</html>