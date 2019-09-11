<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
	function one() 
	 {
	 	var a = document.getElementById("f_num").value;
	 	var b = document.getElementById("s_num").value;

	 	 var x = parseInt(a);
	 	 var y = parseInt(b);

	 	 var c = x+y;
	 	 alert("num sum is "+c);
		
	 }
	 function two ()
	  {
	 	var a = document.getElementById("f_num").value;
	 	var b = document.getElementById("s_num").value;
	 	var x = parseInt(a);
	 	var y = parseInt(b);
	 	var c = x-y;
	 	alert("this number is "+c);
	 }
	 function three ()
	 {
	    var a = document.getElementById("f_num").value; 
	    var b = document.getElementById("s_num").value;
	    var x = parseInt(a); 
	    var y = parseInt(b);
	    var c = x*y; 
	    alert("this number is "+c); 
	 }
	 function four ()
	 {
	    var a = document.getElementById("f_num").value; 
	    var b = document.getElementById("s_num").value;
	    var x = parseInt(a); 
	    var y = parseInt(b);
	    var c = x/y; 
	    alert("this number is "+c); 
	 }
		
	</script>
</head>
<body>
Fust Num<input type="text" id="f_num" >
<br><br>
Sec Num<input type="text"  id = "s_num">
<br><br>
<button onclick="one()">+</button>
<button onclick="two()">-</button>
<button onclick="three()">x</button>
<button onclick="four()">/</button>
</body>
</html>