<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a=document.GetElementById('name').value;

			document.GetElementById("ans").innerHTML=a;

		}
	</script>
</head>
<body>
   <button onclick="demo()">ok</button>
   <br>
   <br>
   <br>
   <input type="text" id="name">
   <br>
   <br>
   <h1 id="ans"></h1>

</body>
</html>