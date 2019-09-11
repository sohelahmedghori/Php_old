<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
	function demo (n)
	 { 
	 	var a = document.getElementById('f_num').value; 
	 	var b = document.getElementById('s_num').value;
	 	var x = parseInt(a); 
	 	var y = parseInt(b);
	 	switch (n)
	 	{ 
	 		case 1 : var c = x+y;
	 		break;
	 		case 2 : var c = x-y;
	 		break;
	 		case 3 : var c =  x*y;
	 		break;
	 		case 4 : var c = x/y;
	 		break;
	 	}
	 	alert("This ans is "+c); 



		
	  }

		
			
		
	</script>
</head>
<body>
Fast Number
<input type="text" id="f_num">
<br><br>

Second number
<input typr="text" id="s_num">
<br><br>
<button onclick="demo(1)">+</button>
<button onclick="demo(2)">-</button>
<button onclick="demo(3)">x</button>
<button onclick="demo(4)">/</button>



</body>
</html>