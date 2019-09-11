<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
          height: auto;
          min-height: 150px;
          width: 150px;
          border-radius: 10px;
          background-color: blue;
          display: none;
		}
		
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
           $("a").mouseover(function(){
           	$("#box").slidedown(500);


           });
           $("a").mouseout(function(){
           	$("#box").slideup(500);
           });


		});

	</script>
</head>
<body>
<a href="#">Help</a>
<div id="box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit </div>
</body>
</html>