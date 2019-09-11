<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add_more()
		{			var tr = document.createElement("tr");

			var td1 = document.createElement("td");
			var td2 = document.createElement("td");
			var td3 = document.createElement("td");
			var td4 = document.createElement("td");

			var input1 = document.createElement("input");			
			var input2 = document.createElement("input");	
			
			input1.setAttribute("type", "text");
			input1.setAttribute("name", "s_name[]");
			input2.setAttribute("type", "text");
			input2.setAttribute("name", "fee[]");

			td1.innerHTML="Student Name";
			td2.appendChild(input1);
			td3.innerHTML="Fee";
			td4.appendChild(input2);

			tr.appendChild(td1);
			tr.appendChild(td2);
			tr.appendChild(td3);
			tr.appendChild(td4);

			document.getElementById("tab").appendChild(tr);

		}
	</script>
</head>
<body>
<center><h2>Add Student</h2></center>
<form action="save.php" method="post">
	<center>
		<input type="button" value="Add More" onclick="add_more()">
		<input type="submit" value="Save">
	</center>
	<br />
	<table id="tab" align="center" border="1" cellspacing="0" cellpadding="10">
		<tr>
			<td>Student Name</td>
			<td><input type="text" name="s_name[]"/></td>
			<td>Fee</td>
			<td><input type="text" name="fee[]"/></td>
		</tr>
	</table>
</form>
</body>
</html>