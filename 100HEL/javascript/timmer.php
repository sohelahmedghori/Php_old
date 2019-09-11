<!DOCTYPE html>
<html>
<head>
	<title></title>
<<<<<<< HEAD
	<style type="text/css">
		#msg{
			display: inline-block;
		}
		#msg1{
			display: inline-block;
		}
	</style>
=======
>>>>>>> 54c01d7234a13747cc9429c0ca64a3123427a8cc
	<script type="text/javascript">
		var a=0;
		var b=0;
		function demo()
		{
			b+=1;
			document.getElementById("msg").innerHTML=a;
			document.getElementById("msg1").innerHTML=b;
			if (b==59) 
			{
				a+=1;
				b=0;
			}
<<<<<<< HEAD
			setTimeout("demo()",100);	
=======
			setTimeout("demo()",1000);	
>>>>>>> 54c01d7234a13747cc9429c0ca64a3123427a8cc
		}
	</script>
</head>
<body>
	<button onclick="demo()">Go</button><br />
<<<<<<< HEAD
	<h1 id="msg">00</h1>
	<b>:</b>
	<h1 id=msg1>00</h1>
=======
	<h1><span id="msg">00</span>
	:
	<span id=msg1>00</span></h1>
>>>>>>> 54c01d7234a13747cc9429c0ca64a3123427a8cc
</body>
</html>