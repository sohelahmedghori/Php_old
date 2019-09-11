<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var a = 0;
		var b = 0;
		var x="";
		function start()
		{
			b++;
			if(b==60)
			{
				a++;
				if(a<=9)
				{
					document.getElementById("min").innerHTML="0"+a;

				}
				else
				{
					document.getElementById("min").innerHTML=a;
					
				}
				b=0;
			}
			if(b<=9)
			{
				document.getElementById("sec").innerHTML="0"+b;
				
			}
			else
			{
				document.getElementById("sec").innerHTML=b;

			}


			x=setTimeout("start()", 50);
		}
		function pause()
		{
			clearTimeout(x);
		}
		function reset()
		{
			clearTimeout(x);
			document.getElementById("sec").innerHTML="00";
			document.getElementById("min").innerHTML="00";
			a=0;
			b=0;
		}
	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="reset()">Reset</button>
<h1><span id="min">00</span>:<span id="sec">00</span></h1>
</body>
</html>