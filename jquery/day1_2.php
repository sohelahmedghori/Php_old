<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: red;
			display: none;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $("#box").hide();
				// $("#box").slideUp(3000);
				// $("#box").fadeOut(2000);
				// $("#box").show();
				$("#box").slideDown(3000);
				// $("#box").fadeIn(2000);
			});
		});
	</script>

</head>
<body>
	<button>OK</button>
<div id="box"></div>
</body>
</html>