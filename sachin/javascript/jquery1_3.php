<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 150px;
			
			width: 200px;
			box-shadow: 0 0 10px #000;
			border-radius: 10px;
			margin-left: 20px;
			padding: 10px;
			text-align: justify;
			margin-top: 10px;
			display: none;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").mouseover(function(){
				$("#box").slideDown(100);
			});
			$("a").mouseout(function(){
				$("#box").slideUp(100);
			});
		});
	</script>

</head>
<body>
<a href="#">Help</a>
<div id="box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.</div>
</body>
</html>