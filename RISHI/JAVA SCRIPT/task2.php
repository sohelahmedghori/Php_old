<?php
$n=rand(1000,9999);
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../project/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../project/css/font-awesome.css">
	<script type="text/javascript" src="../project/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="../project/js/jquery.js"></script>
	<script type="text/javascript">
		function add_more()
		{
			var tr = document.createElement("tr");

			var td1 = document.createElement("td");
			var td2 = document.createElement("td");
			var td3 = document.createElement("td");
		
			var input1 = document.createElement("input");
			var input2 = document.createElement("input");
			var input3 = document.createElement("input");

			input1.setAttribute("type","text");
			input1.setAttribute("name","p_name[]");
			input2.setAttribute("type","text");
			input2.setAttribute("name","quan[]");
			input3.setAttribute("type","text");
			input3.setAttribute("name","p_price[]");

			td1.appendChild(input1);	
			td2.appendChild(input2);
			td3.appendChild(input3);

			tr.appendChild(td1);
			tr.appendChild(td2);
			tr.appendChild(td3);

			document.getElementById("kkk").appendChild(tr);
		}
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<form action="save.php" method="post"> 
					<div class="card">
						<div class="card-header">
							<h2>Shopping Bill</h2>
						</div>
						<div class="card-body">
							<input type="hidden" name="id" value="<?php echo $n;  ?>">
							<div class="form-group">	
									<label>Innvoice No.</label>
									<input type="text" name="voice_no" value="<?php echo $n; ?>" disabled="disabled" class="form-group">
							</div>
							<div class="form-group">	
									<label>Customer Name</label>
									<input type="text" name="cust_name" class="form-group">
							</div>		
						</div>
						<div class="row">
							<div class="col-md-10">
						<table class="table table-bordered" id="kkk">
							<tr>
								<th>Product name</th>
								<th>Product Qty.</th>
								<th>Product Price</th>
							</tr>
							<tr>
								<td><input type="text" name="p_name[]"></td>
								<td><input type="text" name="quan[]"></td>
								<td><input type="text" name="p_price[]"></td>
							</tr>
						</table>
							</div>
							<div class="col-md-2">
									<input type="button" value="Add more" onclick="add_more()">
									<input type="submit" value="SAVE">
							</div>
						</div>	
					</div>
				</form>
			</div>	
		</div>		
	</div>
</body>
</html>