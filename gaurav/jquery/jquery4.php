<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	 #box{
	 	height: 100px;
	 	width: 150px;
	 	background-color: red;

	 }
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#box").mouseover(function(){
				$("#box").animate({"margin-left":"300px","height":"200px","width":"100px"},1000);
				$("#box").animate({"margin-left":"0px","height":"150px","width":"100px"},1000);

			});

		});


	</script>
</head>
<body>
  <div id="box"></div>
</body>
</html>