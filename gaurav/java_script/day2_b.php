<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 100;
		var x = "";
		function start()
		{
          a += 1;
          document.getElementById("repeat").innerHTML=a;
          x = setTimeout("start()",1000);
		}
		function stop()
		{
         clearTimeout(x);
		}
		function reset()
		{	
			a=100;
          document.getElementById("repeat").innerHTML="100";
		}



	</script>




</head>
<body>
<button onclick="start()">Start</button>
<button onclick="stop()">Stop</button>
<button onclick="reset()">Reset</button>
<br>
<h1 id="repeat"></h1>
</body>
</html>