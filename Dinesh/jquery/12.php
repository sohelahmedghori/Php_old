<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#bo{
		height:200px; 
		width:200px;
		background-color: red; 
		display: none;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{

             $("button").click(function()
             {
             	$("#bo").fadeIn(2000);
             	// $("#bo").slideUp();
             	// $("#bo").fadeOut(2000);
             	// $("#bo").show();
             	// $("#bo").slideDown(3000);
             	// $("#bo").hide();
             });
		});
	</script>
</head>
<body>
	<button>ok</button>
     <div id="bo"></div>
</body>
</html>