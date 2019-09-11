<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			var a=document.getElementById('f_num').value;
			var b=document.getElementById('s_num').value;
			var x=parseInt(a);
			var y=parseInt(b);
			var c=x+y;
			alert("Your ans is :  "+c);
		}
		function demo1()
		{
			var a=document.getElementById('f_num').value;
			var b=document.getElementById('s_num').value;
			var x=parseInt(a);
			var y=parseInt(b);
			var c=x*y;
			alert("Your ans is :  "+c);
		}function demo2()
		{
			var a=document.getElementById('f_num').value;
			var b=document.getElementById('s_num').value;
			var x=parseInt(a);
			var y=parseInt(b);
			var c=x/y;
		}
		function demo3()
		{
			var a=document.getElementById('f_num').value;
			var b=document.getElementById('s_num').value;
			var x=parseInt(a);
			var y=parseInt(b);
			var c=x-y;
			alert("Your ans is :  "+c);
		}
	</script>
</head>
<body>
	<br />
	<br />
	First Number <input type="text" id="f_num">
	<br />
	<br />
	Second Number <input type="text" id="s_num">
	<br />
	<button onclick="demo()">+</button>
	<button onclick="demo1()">x</button>
	<button onclick="demo2()">/</button>
	<button onclick="demo3()">-</button>
</body>
</html>