<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>

		function demo()
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;
		function demo(n)
		{

			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;
			var x = parseInt(a);
			var y = parseInt(b);
			switch(n){
				case 1 : var c = x+y;
						break;
				case 2 : var c = x-y;
						break;
				case 3 : var c = x/y;
						break;
				case 4 : var c = x*y;
						break;
			
			}




			alert("Your Ans is : "+c);
			
		}
	</script>
</head>
<body>
First Num <input type="text" id="f_num"/>
<Br />
<Br />
Second Num <input type="text" id="s_num"/>
<Br />
<Br />

<button onclick="demo()">+</button>
<button onclick="">-</button>
<button onclick="">/</button>
<button onclick="">x</button>

<button onclick="demo(1)">+</button>
<button onclick="demo(2)">-</button>
<button onclick="demo(3)">/</button>
<button onclick="demo(4)">x</button>

</body>
</html>