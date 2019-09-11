<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	var a = 0;
	var b = 0;
	// var x =""
		function start()
		{
			b++;
			if(b==60)
			{   

				a++;
				document.getElementById("min").innerHTML=a;
				b=0;

			}
				if(b<=9)
				{
				document.getElementById("sec").innerHTML="0"+b;
			    }
			else{
				document.getElementById("sec").innerHTML=b;
			    }
				setTimeout("start()",100);
			
		}



	</script>


</head>
<body>
<button onclick="start()">Start</button>
<h1><span id="min">00</span>:<span id="sec">00</span></h1>

</body>
</html>