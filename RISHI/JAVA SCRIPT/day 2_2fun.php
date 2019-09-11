<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function jio()
		{
			var a=document.getElementById("ddd").value;
			var b=document.getElementById("ans").value=a;
		}
		function kkk()
		{
			var x=document.getElementById("lala").value;
			var y=document.getElementById("ann").innerHTML=x;
		}
	</script>
</head>
<body>
	<input type="text" id="ddd">
	<br>
	<br>
	<input type="text" id="ans">
	<br>
	<br>
	<button onclick="jio()">ok</button>
	<br>
	<br>


	<button onclick="kkk()">go baby go</button>
	<br>
	<br>
	<input type="text" id="lala">
	<br>
	<br>
	<h2 id="ann"></h2>
</body>
</html>