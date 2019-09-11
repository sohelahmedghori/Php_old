<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 150px;
			width:150px;
			background-color: red;
			display: none;
		    }
	</style>
	<script type="text/javascript" src="jquery.js">
	</script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$("button").click(function(){
				$("#box").fadeIn(3000);
			});

		});

		



	</script>
</head>
<body>
<button>OK</button>
<div id="box"></div>
</body>
</html>