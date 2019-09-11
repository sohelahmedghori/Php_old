<?php
$r=rand(1000,10000);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript">
		function add() 
		{
			var tr=document.createElement("tr");

			var td1=document.createElement("td");
			var td2=document.createElement("td");
			var td3=document.createElement("td");

			var input1=document.createElement("input");
			var input2=document.createElement("input");
			var input3=document.createElement("input");

			input1.setAttribute("type","text");
			input1.setAttribute("name","p_name[]");
			input2.setAttribute("type","text");
			input2.setAttribute("name","p_quantity[]");
			input3.setAttribute("type","text");
			input3.setAttribute("name","p_price[]");

			td1.appendChild(input1);
			td2.appendChild(input2);
			td3.appendChild(input3);

			tr.appendChild(td1);
			tr.appendChild(td2);
			tr.appendChild(td3);

			document.getElementById("table").appendChild(tr);
		}
	</script>
</head>
<body>
	<div class="container my-4">
		<div class="row">
			<div class="col-md-8 offset-2" style="border: 1px solid black;">
				<form class="my-3" action="save_customer.php" method="post">
					<div class="form-group form-inline">
						<label>Invoice No. :</label>
						<input type="text" name="invoice" class="form-control ml-4" disabled="disabled" value="<?php echo $r;?>">
						<input type="hidden" name="invoice_num" value="<?php echo $r;?>">
					</div>
					<div class="form-group form-inline">
						<label>Customer Name :</label>
						<input type="text" name="customer_name" class="form-control ml-4" placeholder="Customer Name">
					</div>
					<hr />
					<div class="row">
						<div class="col-md-8">
							<table class="table table-bordered" id="table">
								<tr>
									<td>Product Name</td>
									<td>Quantity</td>
									<td>Price</td>
								</tr>
								<tr>
									<td><input type="text" name="p_name[]"></td>
									<td><input type="text" name="p_quantity[]"></td>
									<td><input type="text" name="p_price[]"></td>
								</tr>
							</table>
						</div>
						<div class="col-md-1 offset-3">
							<input type="button" value="Add" class="my-1" onclick="add()">
							<br />
							<input type="submit" value="Save" class="my-1">
						</div>
					</div>
				</form>		
			</div>
		</div>
	</div>
</body>
</html>