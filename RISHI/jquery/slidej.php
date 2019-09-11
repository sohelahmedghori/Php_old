<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		#my
		{
			background-color: red;
			height: 301px;
			width: 305px;
			border-radius: 10px;
			box-shadow: 2px 2px 5px orange;
			margin-left: 10px;
			margin-top: 10px;
			text-align: justify;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("a").click(function()
			{
				$("#my").slideDown(400);
			});
			$("a").mouseout(function()
			{
				$("#my").slideUp(1500);
			});
		});
	</script>
</head>
<body>	
	<a href="#">show</a>
	<div id="my">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</body>
</html>