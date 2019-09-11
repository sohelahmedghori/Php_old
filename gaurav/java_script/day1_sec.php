<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo1()
		{
         var a = document.getElementById("f_num").value;
         var b = document.getElementById("s_num").value;
         var c = parseInt(a);
         var d = parseInt(b);
         var x = c+d;

         alert("Your answer is"+x);
		}
       function demo2()
       {
         var a = document.getElementById("f_num").value; 
         var b = document.getElementById("s_num").value;
         var c = parseInt(a);
         var d = parseInt(b);
         var x =c-d;
         alert("Your answer is"+x);
       }
       function demo3()
       {
       	var a = document.getElementById("f_num").value;
       	var b = document.getElementById("s_num").value;
       	var c = parseInt(a);
       	var d = parseInt(b);
       	var x = c*d;
       	alert("your answer is"+x);

       }
       function demo4()
       {
       	var a = document.getElementById("f_num").value;
       	var b = document.getElementById("s_num").value;
       	var c = parseInt(a);
       	var d = parseInt(b);
       	var x =c/d;
       	alert("Your answer is"+x);


       }

	</script>




</head>
<body>
First num<input type="text" id="f_num"/>
</br>
Second num<input type="text" id="s_num"/>
<br>
<br>
<button onclick="demo1()">+</button>
<button onclick="demo2()">-</button>
<button onclick="demo3()">*</button>
<button onclick="demo4()">/</button>
</body>
</html>