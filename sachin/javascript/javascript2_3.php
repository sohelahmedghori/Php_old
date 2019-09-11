<!DOCTYPE html>

<head><title></title>









<script type="text/javascript">
function demo()
 {
	var a = document.getElementById("width").value;
	var b = document.getElementById("height").value;
	var c = document.getElementById("bg").value;
	var d = document.getElementById("border").value;
	document.getElementById("box").style.width=a+"px";
	document.getElementById("box").style.height=b+"px";
	document.getElementById("box").style.backgroundColor=c;
	document.getElementById("box").style.border=d+"px solid red";
}
</script>

</head>
<body>
	Width
	<input type="text" id="width"><br><br><br>
	Height
	<input type="text" id="height"><br><br><br>
	Background Color
	<input type="text" id="bg"><br><br><br>
	Border
	<input type="text" id="border"><br><br><br>
     <button onclick="demo()" >Ok</button>

	<div id="box"></div>


</body>
</html>