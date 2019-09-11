<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	var a = 0;
	var b = 0;
	var d = 0;
	var c = "";
	function start()
	 {
	 	b++;
	 	if(b==10)
	 	{
	 		a++;
	 		if(a<=9)
	 		{
              document.getElementById("fast").innerHTML="0"+a;

	 		}
	 		else
	 		{
              document.getElementById("fast").innerHTML=a;			
	 		}
	 		b=0;
	 	}
	 	if(b<=9)
			{
				document.getElementById("second").innerHTML="0"+b;
				
			}
			else
			{
				document.getElementById("second").innerHTML=b;

			}
			if(d<=9)
			{
				document.getElementById("zero").innerHTML="0"+d;
				
			}
			else
			{
				document.getElementById("zero").innerHTML=b;

			}
		
			




			x=setTimeout("start()",2);

	 	
}
function pause()
 {
	clearTimeout(x);
}
function reset()
 {
clearTimeout(x);
document.getElementById("fast").innerHTML=00;
document.getElementById("second").innerHTML=00;
a =0;
b =0;
}

	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="reset()">Reset</button>
<h1><span id="zero">00</span>:<span id="fast">00</span>:<span id="second">00</span></h1>
</body>
</html>