<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function add()
		{
			var a =document.getElementById("first").value;
			var b =document.getElementById("second").value;

			var x =parseInt(a);
			var y =parseInt(b);

			var c =x+y;

			alert("The sum is:"+c);
		}
		function sub()
		{
			var a =document.getElementById("first").value;
			var b =document.getElementById("second").value;

			var x =parseInt(a);
			var y =parseInt(b);

			var d =x-y;

			alert("The sub is:"+d);
		}
		function mul()
		{
			var a =document.getElementById("first").value;
			var b =document.getElementById("second").value;

			var x =parseInt(a);
			var y =parseInt(b);

			var e =x*y;

			alert("The multiplication is:"+e);
		}
		function div()
		{
			var a =document.getElementById("first").value;
			var b =document.getElementById("second").value;

			var x =parseInt(a);
			var y =parseInt(b);

			var f =x/y;

			alert("The division is:"+f);
		}

	</script>
</head>
<body>
	First no.<input type="text" id="first">
	<br>
	second no.<input type="text" id="second">
	<br>
	<button onclick="add()">+</button>
	<button onclick="sub()">-</button>	
	<button onclick="mul()">*</button>
	<button onclick="div()">/</button>

</body>
</html>