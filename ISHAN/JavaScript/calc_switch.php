<!DOCTYPE html>
<html>
<head>
	<title>Calc Using Switch Case</title>
	<script>
		function calc(n)
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			switch(n)
			{
				case 1 : var c = x+y;
						break;
				case 2 : var c = x-y;
						break;
				case 3 : var c = x*y;
						break;
				case 4 : var c = x/y;
						break;
			}

			alert("Your Ans is : "+c);
		}
	</script>
</head>
<body>
<br/>
<br/>
First Num : <input type="text" id="f_num">
<br/>
Second Num : <input type="text" id="s_num">
<br/>
<button onclick="calc(1)">+</button>
<button onclick="calc(2)">-</button>
<button onclick="calc(3)">*</button>
<button onclick="calc(4)">/</button>
</body>
</html>